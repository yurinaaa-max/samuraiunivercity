<?php get_header(); ?>

    <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <!-- titleを出力します -->
            <div><?php the_title(); ?></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Course -->

    <div class="course">
      <div class="row content-body">
        <!-- Course -->
        <div class="col-lg-8">
          <!-- Course Tabs -->
          <div class="course_tabs_container">
            <div class="tab_panels">
              <!-- Description -->
              <div class="tab_panel">
                <div class="tab_panel_title">侍大学について</div>
                <!-- ここからはすべて the_content()で置き換えるため削除します。 -->
                ここに大学の年表を表示します
                <!-- ここまではすべて the_content()で置き換えるため削除します。 -->
              </div>
            </div>
          </div>
        </div>

        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="course">
              <div class="row content=body">
                <div class="col-lg-8">
                  <div class="course_tabs_container">
                    <div class="tab_panels">
                      <div class="tab_panel">
                        <div class="tab_panel_title"><?php the_title(); ?></div>
                        <?php the_content(); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <!-- Course Sidebar -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php get_footer(); ?>