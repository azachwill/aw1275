<?php
/**
 * Plugin Name: Download Table
 * Description: Looks up download metadata from downloads.json
 * Version: 0.0.2
 * Author: Joe Cheng
 */

function get_by_key($info, $path) {
  $parts = explode(".", $path);
  $is_size = false;
  foreach ($parts as $part) {
    if (!array_key_exists($part, $info)) {
      return "(" . $path . "???)";
    }
    $info = $info[$part];
  }
  return $info;
}

function download_get_data() {
  // This logic is copied from getProductDetails(), from Butcher Shop's helpers.php

  $product = false;
  $uploadsPath = wp_get_upload_dir()['basedir'] ?: '';
  $downloadsFile = "{$uploadsPath}/downloads.json";
  $fallbackDownloadsFile = get_template_directory() . '/dist/file-assets/products.json';

  /*
      Use '@' to suppress php warnings when the function can't find the file since have fallbacks
      Reference: https://www.php.net/manual/en/language.operators.errorcontrol.php
  */
  return @file_get_contents($downloadsFile) ?: @file_get_contents($fallbackDownloadsFile) ?: null;
}

$download_info = null;
function download_get_info() {
  global $download_info;

  // Use cached copy if available
  if (!is_null($download_info)) {
    return $download_info;
  }
  $json = download_get_data();
  $download_info = json_decode($json, $assoc = true);
  return $download_info;
}

// [download_info key="rstudio.open_source.stable.desktop.installer.windows.url"]
function download_info_func($atts) {
  $a = shortcode_atts(array(
    "key" => "rstudio.open_source.stable.desktop.installer.windows.url",
  ), $atts);

  return get_by_key(download_get_info(), $a["key"]);
}
add_shortcode("download_info", "download_info_func");
