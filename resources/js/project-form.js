const addButton = document.querySelector('#add-user-to-project')

if(addButton !== null) {
    const users = [];

    const form = document.querySelector('#project-form')
    const userSelect = document.querySelector('#project-user-select')
    const roleSelect = document.querySelector('#project-role-select')
    const table = document.querySelector('#project-users')


    addButton.addEventListener('click', function(e) {
        e.preventDefault();
        const selectedUserText = userSelect.options[userSelect.selectedIndex].text
        const selectedRoleText = roleSelect.options[roleSelect.selectedIndex].text
        const selectedUser = userSelect.value;
        const selectedRole = roleSelect.value;

        users.push({userId: selectedUser, roleId: selectedRole})

        const tr = `
            <tr class="border-b">
                <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap font-bold">${selectedUserText}</th>
                <td class="px-6 py-4 border-l">${selectedRoleText}</td>
            </tr>
        `;

        table.querySelector('tbody').innerHTML += tr;

        document.querySelectorAll('.project-user-input').forEach((item) => item.remove())

        for(let i = 0; i < users.length; i++) {
            const user = users[i];

            const input = document.createElement('input')
            input.type = 'hidden'
            input.name = `project_users[${i}][user_id]`
            input.value = user.userId
            input.classList.add('project-user-input')
            form.appendChild(input)

            const roleInput = document.createElement('input')
            roleInput.type = 'hidden'
            roleInput.name = `project_users[${i}][role_id]`
            roleInput.value = user.roleId
            roleInput.classList.add('project-user-input')
            form.appendChild(roleInput)
        }
    });
}