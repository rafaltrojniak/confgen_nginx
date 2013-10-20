<?php
/**
 * Class for listen directive
 * Front nginx http://wiki.nginx.org/HttpCoreModule#listen
 * listen address [: port ] [ default_server ] [ backlog = number ] [ rcvbuf = size ] [ sndbuf = size ] [ accept_filter = filter ] [ deferred ] [ bind ] [ ipv6only = on | off ] [ ssl ] [ so_keepalive = on | off |[ keepidle ]:[ keepintvl ]:[ keepcnt ]]
 * listen port			  [ default_server ] [ backlog = number ] [ rcvbuf = size ] [ sndbuf = size ] [ accept_filter = filter ] [ deferred ] [ bind ] [ ipv6only = on | off ] [ ssl ] [ so_keepalive = on | off |[ keepidle ]:[ keepintvl ]:[ keepcnt ]]
 * listen unix: path		[ default_server ] [ backlog = number ] [ rcvbuf = size ] [ sndbuf = size ] [ accept_filter = filter ] [ deferred ] [ bind ]						 [ ssl ] [ so_keepalive = on | off |[ keepidle ]:[ keepintvl ]:[ keepcnt ]]
 **/
namespace Confgen\Nginx\Module\Http;
use Confgen\Nginx\Directive;
use Confgen\Nginx\Block;
class Listen extends Directive
{

	/* Basic specification */
	private $address;
	private $port;
	private $socket;

	/* Options */
	private $accept_filter ;
	private $backlog ;
	private $bind ;
	private $default_server ;
	private $deferred ;
	private $ipv6only ;
	private $rcvbuf ;
	private $sndbuf ;
	private $so_keepalive ;
	private $ssl ;

	public function __construct()
	{
		parent::__construct();
		parent::setName('listen');
	}
		public function getAddress() {
			return $this->address;
		}

		public function getPort() {
			return $this->port;
		}

		public function getSocket() {
			return $this->socket;
		}

		public function getAccept_filter() {
			return $this->accept_filter;
		}

		public function getBacklog() {
			return $this->backlog;
		}

		public function getBind() {
			return $this->bind;
		}

		public function getDefault_server() {
			return $this->default_server;
		}

		public function getDeferred() {
			return $this->deferred;
		}

		public function getIpv6only() {
			return $this->ipv6only;
		}

		public function getRcvbuf() {
			return $this->rcvbuf;
		}

		public function getSndbuf() {
			return $this->sndbuf;
		}

		/**
		 * @TODO
		 */
		public function getSo_keepalive() {
			throw new Exception("TODO");
		}

		public function getSsl() {
			return $this->ssl;
		}

		/**
		 * Sets network address to listen on
		 * @TODO add brackets for ipv6
		 * @TODO add address format verification
		 * @param type $address Network address
		 */
		public function setAddress($address) {
			$this->address = $address;
			return $this;
		}

		public function setPort($port) {
			$port=(int)$port;
			if($port>=256*256 or $port < 1)
				throw new \InvalidArgumentException("Invalid network port $port");
			$this->port = $port;
			return $this;
		}

		/**
		 * @TODO verify and support in generation
		 * @param type $socket
		 */
		public function setSocket($socket) {
			$this->socket = $socket;
			return $this;
		}

		public function setAccept_filter($accept_filter) {
			if(!in_array($accept_filter,array("dataready","httpready")))
					throw new \InvalidArgumentException("Wrong accept filter: '$accept_filter'");
			$this->accept_filter = $accept_filter;
			return $this;
		}

		public function setBacklog($backlog) {
			$backlog=(int)$backlog;
			if($backlog < 0)
				throw new \InvalidArgumentException("Invalid backlog supplied: $backlog");
			$this->backlog = $backlog;
			return $this;
		}

		public function setBind($bind=true) {
			$bind=(boolean)$bind;
			$this->bind = $bind;
			return $this;
		}

		public function setDefaultServer($default_server=true) {
			$default_server=(boolean)$default_server;
			$this->default_server = $default_server;
			return $this;
		}

		public function setDeferred($deferred) {
			$deferred=(boolean)$deferred;
			$this->deferred = $deferred;
			return $this;
		}

		/**
		 * Sets ipv6only flag
		 * @param boolean|null $ipv6only sets ipv6only flag (true=on, false=off, null=default)
		 */
		public function setIpv6only($ipv6only) {
			$ipv6only=  is_null($ipv6only)?null:(boolean)$ipv6only;
			$this->ipv6only = $ipv6only;
			return $this;
		}

		/**
		 * assigned to the parameter SO_RCVBUF for the listening socket.
		 * @TODO verify that applies to ngx_parse_size
		 * @param string $rcvbuf
		 */
		public function setRcvbuf($rcvbuf) {
			$this->rcvbuf = $rcvbuf;
			return $this;
		}

		/**
		 * assigned to the parameter SO_SNDBUF for the listening socket.
		 * @TODO verify that applies to ngx_parse_size
		 * @param string $sndbuf
		 */
		public function setSndbuf($sndbuf) {
			$this->sndbuf = $sndbuf;
			return $this;
		}

		/**
		 * @TODO
		 * @param type $so_keepalive
		 * @throws Exception
		 */
		public function setSoKeepalive($so_keepalive) {
			throw new Exception("TODO");
			return $this;
		}

		public function setSsl($ssl) {
			$ssl=(boolean)$ssl;
			$this->ssl = $ssl;
			return $this;
		}

		public function getParams() {
			$params=array();

			$address=null;

			if(!is_null($this->address)){
				$address=$this->address;
				//TODO check for ipv6 and add brackets
			}

			if(!is_null($this->port)){
				$address.=":".$this->port;
			}

			if($this->socket){
				$address="unix:".$this->socket;
			}

			if(empty($address))
				throw new \Exceptoin('No address, socket or port supplied for listen directive');
			$params[]=$address;

			if($this->default_server){
				$params[]="default_server";
			}
			if(!is_null($this->backlog)){
				$params[]="backlog=".$this->backlog;
			}
			if(!is_null($this->rcvbuf)){
				$params[]="rcvbuf=".$this->rcvbuf;
			}
			if(!is_null($this->sndbuf)){
				$params[]="sndbuf=".$this->sndbuf;
			}
			if(!is_null($this->accept_filter)){
				$params[]="accept_filter=".$this->accept_filter;
			}
			if($this->deferred){
				$params[]="deferred";
			}
			if($this->bind){
				$params[]="bind";
			}
			if(!is_null($this->ipv6only)){
				$params[]="ipv6only=".$this->ipv6only?"on":"off";
			}
			if($this->ssl){
				$params[]="ssl";
			}

			// @TODO
			//if(!is_null($this->so_keepalive)){
			//	$params[]="so_keepalive=".$this->so_keepalive;
			//}
			return $params;

		}
}
