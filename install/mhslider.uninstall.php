<?php defined('MONSTRA_ACCESS') or die('No direct script access.');

// Delete Options
Option::delete('mhslider');

// Remove registered shortcode

Shortcode::delete('mhslider');