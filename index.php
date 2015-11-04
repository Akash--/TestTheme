
<?php get_header(); ?>

<div class="container">
      <div class="row-fluid">
        <div class="span12">
          <div class="nav">nav area</div>
            <div class="bg-image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg">
              <h1>This is centered text.</h1>
          </div>
        </div>
      </div>
    </div>
<div class="details">
	<div class="container">
		<div class="col-sm-10 dropdown-buttons">
			<div class="col-sm-3 dropdown-button">
				<div class="input-group">
					<input class="form-control has-dark-background" name="slider-name" id="slider-name" placeholder="Name" type="text" required="">
				</div>
			</div>
			<div class="col-sm-3 dropdown-button">
				<div class="input-group">
					<input class="form-control has-dark-background" name="slider-name" id="slider-name" placeholder="Email" type="text" required="">
				</div>
			</div>
			<div class="col-sm-3 dropdown-button">
				<div class="section_1">
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">Learn Level</option>
						<option value="null">Bignner</option>
						<option value="AX">Advanced</option>
						<option value="AX">Intermediate</option>
					</select>
				</div>
			</div>
			<div class="col-sm-3 dropdown-button">
				<div class="section_1">
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">Courses</option>
						<option value="null">Finance</option>
						<option value="AX">Marketing</option>
						<option value="AX">Science</option>
					</select>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col-sm-2 submit_button">
			<form>
				<input type="submit" value="Search">
			</form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-8">

				<h3>Posts <span class="badge">2222</span></h3>

				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

					<div>
						<h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php the_content(); ?>
					</div>

				<?php endwhile; endif; ?>

				<h3><a href="#">All Post</a></h3>
			</div>
				<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>