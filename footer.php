<?php
if (! defined('ABSPATH')) {
    exit;
}
?>
<footer>
  <div class="footer-grid">
    <div class="footer-brand">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo" style="display: inline-flex; margin-bottom: 4px;">
        <div class="logo-mark">FC</div>
        <div class="logo-text">
          Franklin Cycling
          <span>Franklin, TN</span>
        </div>
      </a>
      <p>A NICA-affiliated youth mountain bike team serving student athletes from Franklin High School and Williamson County schools.</p>
      <div class="footer-social">
        <a href="#" class="social-btn" aria-label="Facebook">f</a>
        <a href="#" class="social-btn" aria-label="LinkedIn">in</a>
        <a href="#" class="social-btn" aria-label="Email">@</a>
      </div>
    </div>

    <div class="footer-col">
      <h5>Team</h5>
      <ul>
        <li><a href="#about">About Us</a></li>
        <li><a href="#programs">Programs</a></li>
        <li><a href="#">Coaching Staff</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h5>Riders</h5>
      <ul>
        <li><a href="#new-rider">New Rider Info</a></li>
        <li><a href="#join">Register</a></li>
        <li><a href="#">Gear Guide</a></li>
        <li><a href="#">Practice Schedule</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h5>Resources</h5>
      <ul>
        <li><a href="https://tennesseemtb.org" target="_blank" rel="noopener noreferrer">TICL (TN MTB)</a></li>
        <li><a href="https://www.nationalmtb.org" target="_blank" rel="noopener noreferrer">NICA National</a></li>
        <li><a href="#volunteer">Volunteer</a></li>
        <li><a href="#">Sponsorship</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <span>© 2025 Franklin Cycling — Franklin, TN. All rights reserved.</span>
    <span>Affiliated with <a href="https://tennesseemtb.org" target="_blank" rel="noopener noreferrer">Tennessee MTB / TICL</a> and <a href="https://www.nationalmtb.org" target="_blank" rel="noopener noreferrer">NICA</a>.</span>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
