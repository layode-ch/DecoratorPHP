<?php
namespace DecoratorPHP\Enums;

class Theme {
    static string   $ACCENT_BACKGROUND_COLOR    = "blue-600";
    static string   $ACCENT_FOREGROUND_COLOR    = "white-600";
    static string   $BASE_BACKGROUND_COLOR; 
    static string   $BASE_FOREGROUND_COLOR      = "white-300";
    static string   $INPUT_BACKGROUND_COLOR     = "red-500";
    static int      $INPUT_BACKGROUND_INTENSITY = 500;

    static int      $INPUT_BORDER_SIZE = 1;
    static int      $INPUT_BORDER_RADIUS = 3;
    static string   $INPUT_BORDER_COLOR = "blue-500";

    static int      $BASE_BORDER_SIZE = 1;
    static int      $BASE_BORDER_RADIUS = 3;
    static string   $BASE_BORDER_COLOR = "neutral-400";
}