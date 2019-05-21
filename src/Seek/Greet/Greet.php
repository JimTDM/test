<?php

namespace Seek\Greet;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class Greet extends PluginBase{

public function onEnable(){
    }
public function onCommand(CommandSender $sender, Command $command, $label, array $args) :bool{
    $commandName = $command->getName();
    if($commandName === "greet"){
      $sender->sendMessage("Hi!");
      return true;
    }
    return false;
  }
  }
