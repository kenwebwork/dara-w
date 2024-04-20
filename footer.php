<footer>
  <nav>
    <ul class="site-nav">
      <li><a href="<?php echo esc_url('/about'); ?>">daraEnglish とは</a></li>
      <li><a href="<?php echo esc_url('/contact'); ?>">お問い合わせ</a></li>
      <li><a href="<?php echo esc_url('/privacy-policy'); ?>">プライバシーポリシー</a></li>
    </ul>
  </nav>
  <p class="copyright">Copyright &copy; daraEnglish 2024</p>
</footer>
  
<script src="<?php echo get_template_directory_uri(); ?>/public/public.js"></script>
<?php if (is_singular('lesson')): ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/lesson.js"></script>
<?php elseif (is_front_page()): ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/roadmap.js"></script>
<?php endif; ?>