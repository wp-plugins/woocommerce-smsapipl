<?php

namespace SMSApi\Api\Action\User;

use SMSApi\Api\Action\AbstractAction;
use SMSApi\Proxy\Uri;

/**
 * Class UserList
 * @package SMSApi\Api\Action\User
 */
class UserList extends AbstractAction {

	/**
	 * @param $data
	 * @return \SMSApi\Api\Response\UsersResponse
	 */
	protected function response( $data ) {

		return new \SMSApi\Api\Response\UsersResponse( $data );
	}

	/**
	 * @return Uri
	 */
	public function uri() {

		$query = "";

		$query .= $this->paramsLoginToQuery();

		$query .= $this->paramsOther();

		$query .= "&list=1";

		return new Uri( $this->proxy->getProtocol(), $this->proxy->getHost(), $this->proxy->getPort(), "/api/user.do", $query );
	}

}
