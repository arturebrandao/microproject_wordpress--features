<?php

// CARREGANDO DINAMICAMENTE USERS DENTRO DE SELECT CUSTOM FIELD
function load_all_users_not_admin($field)
{
    $field['choices'] = array();

    $userAuthor = get_users('role=author');
    $usersContributor = get_users('role=contributor');
    $usersEditor = get_users('role=editor');
    $usersSubscriber = get_users('role=subscriber');

    $users = array_merge($userAuthor, $usersContributor);
    $users = array_merge($users, $usersEditor);
    $users = array_merge($users, $usersSubscriber);

    foreach ($users as $user) {
        $field['choices'][$user->ID] = $user->user_login;
    }

    return $field;
}
add_filter('acf/load_field/name=acl_load_users', 'load_all_users_not_admin');
