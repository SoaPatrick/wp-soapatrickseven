<?php
/**
 * Layout part for displaying the settings window
 *
 * @package soapatrickseven
 */

?>

<div id="settings">
  <div class="container">
    <div id="settings__header"></div>
    <button id="settings__close">
      <i class="fal fa-times fa-fw"></i>
    </button>
    <h2>Settings</h2>
    <div class="theme-switch-wrapper">
      <i class="fal fa-lightbulb-slash"></i>
      <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="light-dark-switch">
        <div class="slider round"></div>
      </label>
      <i class="fal fa-lightbulb-on"></i>
    </div>
    <div class="color-switch-wrapper">
      <label id="color-switch" for="radio">
        <input type="radio" name="color" id="switch--amber" value="amber">
        <input type="radio" name="color" id="switch--red" value="red">
        <input type="radio" name="color" id="switch--pink" value="pink">
        <input type="radio" name="color" id="switch--purple" value="purple">
        <input type="radio" name="color" id="switch--blue" value="blue">
        <input type="radio" name="color" id="switch--green" value="green">
      </label>
    </div>
  </div>
</div>
