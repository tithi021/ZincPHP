<?php

  class DreamPosts extends ZincPHPMigrater {

    function up () {
      return $this->db->createTable( 'dream_posts' )
        ->increments( 'id' )
        ->string( 'title' )
        ->text( 'content' )
        ->integer( 'author' )
      ->query();
    }

  }
