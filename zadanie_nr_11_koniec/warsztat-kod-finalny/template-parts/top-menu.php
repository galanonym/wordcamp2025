<?php if (!defined('ABSPATH')) { exit; } ?>

<style>
  .top-menu ul {
    display: flex;
    gap: 20px;
    list-style: none;
    margin: 20px 0px 40px 0px;
    justify-content: center;
  }

  .top-menu li a {
    text-decoration: none;
    color: #222;
    font-weight: bold;
    padding: 10px 15px;
    transition: background-color 0.3s ease;
  }

  .top-menu li a:hover {
    background-color: #ddd;
    border-radius: 6px;
  }
</style>
<nav class="top-menu">
  <ul>
    <li><a href="/">Strona główna</a></li>
    <li><a href="/sample-page/">Przykładowa strona</a></li>
    <li><a href="/privacy-policy/">Polityka Prywatności</a></li>
  </ul>
</nav>
