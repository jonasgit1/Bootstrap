                <div class="post-preview">
                  <a href="post.html">
                    <h2 class="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </h2>
                    <h3 class="post-subtitle">
                      Problems look mighty small from 150 miles up
                    </h3>
                  </a>
                  <p class="post-meta">Postado por 
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                    em <?php echo get_the_date(); ?></p>
                </div>
                <hr>