<?php



namespace pocketmine\network\protocol;

#include <rules/DataPacket.h>


class RemoveEntityPacket extends DataPacket{

	const NETWORK_ID = Info::REMOVE_ENTITY_PACKET;

	public $eid;

	public function decode(){

	}

	public function encode(){
		$this->reset();
		$this->putEntityId($this->eid);
	}

	/**
	 * @return PacketName
	 */
	public function getName(){
		return "RemoveEntityPacket";
	}

}
