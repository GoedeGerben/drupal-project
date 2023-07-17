<?php

/**
 * @file
 * Generates stuff
 */

namespace Drupal\the_movie_db_api\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Controller for importing movies from TMDB API.
 */
class TheMovieDbController extends ControllerBase {

  /**
   * Callback for importing movies from TMDB API.
   *
   * @return \Symfony\Component\HttpFoundation\Response
   *   The response.
   */
  public function importMovies() {
    // Fetch movies from TMDB API.
    $movies = the_movie_db_api_movie_search_page();

    // Redirect the user to another page after the import is completed.
  // Redirect the user to another page after the import is completed.
  return new RedirectResponse('/drupal-projects/drupal-project/film-zoeker');
  }

}