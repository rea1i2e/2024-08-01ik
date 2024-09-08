<picture>
  <?php if ($args['sp']) : ?>
    <source srcset="<?php img_path($args['directory'] . $args['file'] . '_sp.webp'); ?>" media="(max-width: 767px)" type="image/webp">
    <source srcset="<?php img_path($args['directory'] . $args['file'] . '_sp.' . $args['type']); ?>" media="(max-width: 767px)" type="image/<?php echo $args['type'] ?>">
  <?php endif; ?>
  <source srcset="<?php img_path($args['directory'] . $args['file'] . '.webp'); ?>" type="image/webp">
  <img src="<?php img_path($args['directory'] . $args['file'] . '.' . $args['type']); ?>" alt="<?php echo $args['alt']; ?>" <?php echo $args['lazy']? 'loading="lazy"' : ''; ?>>
</picture>