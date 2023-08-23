<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Session;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {
            $userId = $result->getData()['id'];
            $users = $this->Users->get($userId);
            $this->set(compact('users'));
        }
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Messages', 'Notifications', 'ProjectUsers', 'Projects', 'Tasks', 'TaskCreators'],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Le compte a bient été enregistré.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('L\'enregistrement du compte a échoué, veuilez réessayer en changeant l\'email ou le phone svp !'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Le compte a bient été modifié'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('L\'enregistrement du compte a échoué, veuilez réessayer en changeant l\'email ou le phone svp !'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Login method
     */

    public function login()
    {
        $result = $this->Authentication->getResult();
        // Si l'utilisateur est connecté, le renvoyer ailleurs
        if ($result->isValid()) {
            $target = $this->Authentication->getLoginRedirect() ?? '/users/';
            return $this->redirect($target);
        }
        if ($this->request->is('post')) {
            $this->Flash->error('Identifiant ou mot de passe invalide');
        }
    }

    /**
     * Logout method
     */
    public function logout()
    {
        $this->Authentication->logout();
        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }

    /**
     * BeforeFilter method
     */

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['login', 'add']);
    }
}
