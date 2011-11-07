Drupal 6.x theme for UCLA.
==========================

This theme is the theme for UCLA. It a modification of fusion_starter_lite, a
Fusion sub-theme based on the original UCLA design at http://digital2.library.ucla.edu/.

Installation guidelines:
========================

- copy the folder to the theme folder. Often this is /sites/all/themes. If you 
download this theme from git, you might need to rename the folder of the theme
to 'ucla'.
- copy the fusion theme to the same theme folder as well.
- download and enable the skinr module
- enable the theme at admin/build/themes.

- Use primary menu as the main navigation.

- cssPie is added as functionality. It can only be called using a relative path
to the current page, not the css file where it is called from. So if the 
theme is not located at sites/all/themes/ , you might want to change that in
the css files.
Now it's set as: behavior: url('/sites/all/themes/ucla/pie/PIE.htc');

Under the ucla theme settings, make sure the following options 
are enabled:
- General settings > Layout : 12 column fixed grid
- General settings > Layout : 3 grid units for each sidebar should be fine.
- General settings > Navigation : make sure primary menu is set as dropdown.

The following skinr options are added when configuring blocks:
- none

- put the islandora_solr_search_simple block into the header region. In the block
settings, set the title to <none>