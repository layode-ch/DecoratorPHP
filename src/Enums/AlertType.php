<?php
namespace DecoratorPHP\Enums;

enum AlertType:string {
    case INFO = "blue";
    case ERROR = "red";
    case WARNING = "yellow";
}