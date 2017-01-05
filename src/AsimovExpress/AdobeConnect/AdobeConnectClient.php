<?php
namespace AsimovExpress\AdobeConnect;

use AdobeConnect\ApiClient;

class AdobeConnectClient extends ApiClient
{
    /**
     * Subscribes a user to a group.
     *
     * @param string $group_id Group id in Adobe Connect
     * @param string $user_id User id in Adobe Connect
     * @param bool $is_member Indicated wether or not a user must be registered in the group.
     */
    public function groupMembershipUpdate($group_id, $user_id, $is_member)
    {
        $params = [
            'group-id' => $group_id,
            'principal-id' => $user_id,
            'is-member' => $is_member
        ];

        $response = $this->call('group-membership-update', $params);

        return $response->xpath('/results/status');
    }
}
