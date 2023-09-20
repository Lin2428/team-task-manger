<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * ProjectUsers Controller
 *
 * @property \App\Model\Table\ProjectUsersTable $ProjectUsers
 * @method \App\Model\Entity\ProjectUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjectUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $projectId = $this->request->getParam('pass')[0];
        $this->paginate = [
            'contain' => ['Projects', 'Users', 'Roles'],
        ];
        $projectUsers = $this->paginate($this->ProjectUsers->find()
            ->where(['project_id' => $projectId]));

        $this->set(compact('projectUsers', 'projectId'));
    }

    /**
     * View method
     *
     * @param string|null $id Project User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projectUser = $this->ProjectUsers->get($id, [
            'contain' => ['Projects', 'Users', 'Roles'],
        ]);

        $this->set(compact('projectUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projectUser = $this->ProjectUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $projectId = $this->request->getData('project_id');
            $projectUser = $this->ProjectUsers->patchEntity($projectUser, $this->request->getData());
            if ($this->ProjectUsers->save($projectUser)) {
                $this->Flash->success(__('The project user has been saved.'));

                return $this->redirect('projectUsers/index/'.$projectId);
            }
            $this->Flash->error(__('The project user could not be saved. Please, try again.'));
        }
        $projects = $this->ProjectUsers->Projects->find('list', ['limit' => 200])->all();
        $users = $this->ProjectUsers->Users->find('list', ['limit' => 200])->all();
        $roles = $this->ProjectUsers->Roles->find('list', ['limit' => 200])->all();
        $this->set(compact('projectUser', 'projects', 'users', 'roles'));

    }

    /**
     * Edit method
     *
     * @param string|null $id Project User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projectUser = $this->ProjectUsers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projectUser = $this->ProjectUsers->patchEntity($projectUser, $this->request->getData());
            if ($this->ProjectUsers->save($projectUser)) {
                $this->Flash->success(__('The project user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The project user could not be saved. Please, try again.'));
        }
        $projects = $this->ProjectUsers->Projects->find('list', ['limit' => 200])->all();
        $users = $this->ProjectUsers->Users->find('list', ['limit' => 200])->all();
        $roles = $this->ProjectUsers->Roles->find('list', ['limit' => 200])->all();
        $this->set(compact('projectUser', 'projects', 'users', 'roles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Project User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projectUser = $this->ProjectUsers->get($id);
        $projectId = $projectUser->project_id;
        if ($this->ProjectUsers->delete($projectUser)) {
            $this->Flash->success(__('The project user has been deleted.'));
        } else {
            $this->Flash->error(__('The project user could not be deleted. Please, try again.'));
        }

        return $this->redirect('projectUsers/index/'.$projectId);
    }
}
