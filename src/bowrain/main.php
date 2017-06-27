<?php
namespace bowrain;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
class main extends PluginBase{
public function onEnable(){
 $this->getServer()->getLogger()->info("plugin enabled");
 $this->getLogger()->info("test good");
  }
public function onDisable(){
 $this->getServer()->getLogger()->info("plugin off");
 }
public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
 switch($cmd->getName()){
 case 'heal':
 $sender->setHealth(20);
 break;
 }
}
