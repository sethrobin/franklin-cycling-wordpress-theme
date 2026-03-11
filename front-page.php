<?php
if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>
<section class="hero" id="home">
  <div class="hero-bg"></div>
  <div class="hero-grid"></div>

  <svg class="hero-terrain" viewBox="0 0 1440 220" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 220 L0 160 L80 120 L160 140 L240 80 L360 110 L440 60 L520 90 L600 30 L680 70 L760 20 L840 55 L920 10 L1000 45 L1080 15 L1160 50 L1240 80 L1320 40 L1440 70 L1440 220 Z" fill="rgba(93,23,37,0.5)"/>
    <path d="M0 220 L0 180 L120 155 L200 170 L300 130 L400 148 L480 100 L560 125 L680 90 L780 115 L880 75 L960 100 L1060 65 L1160 95 L1280 70 L1360 90 L1440 110 L1440 220 Z" fill="rgba(26,13,16,0.85)"/>
  </svg>

  <div class="hero-content">
    <div class="hero-eyebrow">Tennessee NICA · Williamson County</div>
    <h1>
      Ride.<br>
      <span class="accent">Compete.</span><br>
      <span class="outline">Grow.</span>
    </h1>
    <p class="hero-desc">
      Franklin Cycling is Williamson County's competitive youth mountain bike team — building skilled riders, strong character, and a love of the trail from 3rd grade through 12th.
    </p>
    <div class="hero-actions">
      <a href="#join" class="btn-primary">Join the Team →</a>
      <a href="#about" class="btn-secondary">Learn More</a>
    </div>
  </div>

  <div class="hero-stats">
    <div class="stat-item">
      <div class="stat-num">3rd</div>
      <div class="stat-label">grade<br>& up</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">6</div>
      <div class="stat-label">race<br>events</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">1</div>
      <div class="stat-label">team.<br>Franklin.</div>
    </div>
  </div>

  <div class="scroll-indicator">Scroll</div>
</section>

<div class="mission-strip">
  <div class="mission-ticker">
    <span>Ride with Purpose</span><span class="ticker-dot">◆</span>
    <span>Build Champions</span><span class="ticker-dot">◆</span>
    <span>Franklin Strong</span><span class="ticker-dot">◆</span>
    <span>Tennessee MTB</span><span class="ticker-dot">◆</span>
    <span>Student Athletes First</span><span class="ticker-dot">◆</span>
    <span>More Than a Race</span><span class="ticker-dot">◆</span>
    <span>Ride with Purpose</span><span class="ticker-dot">◆</span>
    <span>Build Champions</span><span class="ticker-dot">◆</span>
    <span>Franklin Strong</span><span class="ticker-dot">◆</span>
    <span>Tennessee MTB</span><span class="ticker-dot">◆</span>
  </div>
</div>

<section id="about">
  <div class="about-grid">
    <div class="about-visual">
      <div class="about-card">
        <svg class="mountain-svg" viewBox="0 0 400 260" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="400" height="260" fill="#120608"/>
          <circle cx="50" cy="30" r="1" fill="rgba(255,255,255,0.4)"/>
          <circle cx="120" cy="18" r="1.5" fill="rgba(255,255,255,0.3)"/>
          <circle cx="200" cy="10" r="1" fill="rgba(255,255,255,0.35)"/>
          <path d="M0 180 L60 100 L120 140 L180 80 L240 120 L300 70 L360 110 L400 85 L400 260 L0 260 Z" fill="rgba(93,23,37,0.25)"/>
          <path d="M0 220 L40 160 L100 190 L160 140 L220 165 L280 130 L340 155 L400 140 L400 260 L0 260 Z" fill="rgba(93,23,37,0.5)"/>
          <path d="M0 260 L0 235 L80 215 L160 225 L240 205 L320 220 L400 210 L400 260 Z" fill="#230f13"/>
        </svg>
        <div class="about-badge">
          <div class="year">2024</div>
          <div class="est">Founded</div>
        </div>
      </div>
    </div>

    <div class="about-text">
      <div class="section-label">About the Team</div>
      <h2>More Than<br>Mountain Bikes</h2>
      <div class="gold-line"></div>
      <p>Franklin Cycling is a NICA-affiliated youth mountain bike team serving student athletes from Franklin High School and the surrounding elementary and middle schools across Williamson County.</p>
      <p>We compete in the Tennessee Interscholastic Cycling League (TICL), where riders of all skill levels — from beginners to elite competitors — race, train, and grow together.</p>

      <div class="about-pillars">
        <div class="pillar"><div class="pillar-icon">🏆</div><h4>Compete</h4><p>NICA-sanctioned races across Tennessee, spring season.</p></div>
        <div class="pillar"><div class="pillar-icon">🌲</div><h4>Connect</h4><p>Trail community, friendships, and a love of the outdoors.</p></div>
        <div class="pillar"><div class="pillar-icon">💪</div><h4>Develop</h4><p>Skills clinics, fitness training, and coached rides year-round.</p></div>
        <div class="pillar"><div class="pillar-icon">🎓</div><h4>Lead</h4><p>Student athlete character development on and off the bike.</p></div>
      </div>
    </div>
  </div>
</section>

<section id="programs" class="programs-section">
  <div class="programs-header">
    <div><div class="section-label">Programs</div><h2>Find Your<br>Division</h2></div>
    <a href="#join" class="btn-secondary">Register Now →</a>
  </div>

  <div class="programs-grid">
    <div class="program-card"><div class="program-num">01</div><div class="program-tag">Grades 3–5</div><h3>Composite Elementary</h3><p>Introduction to mountain biking focused on fundamental skills, trail etiquette, and building a love of riding.</p></div>
    <div class="program-card"><div class="program-num">02</div><div class="program-tag">Grades 6–8</div><h3>Middle School</h3><p>Skill development, fitness, and introduction to NICA-style racing.</p></div>
    <div class="program-card"><div class="program-num">03</div><div class="program-tag">Grades 9–12</div><h3>High School Varsity</h3><p>Full NICA competition season with coached training and category-based racing.</p></div>
  </div>
</section>

<section id="new-rider">
  <div class="nica-section">
    <div class="nica-grid">
      <div class="nica-content">
        <div class="section-label">New Riders</div>
        <h2>Never Raced?<br>Start Here.</h2>
        <div class="gold-line"></div>
        <p>You don't need to be fast. You don't need expensive gear. You need a bike, a helmet, and the willingness to show up.</p>
      </div>
      <div class="nica-sidebar">
        <h3>What You'll Need</h3>
        <ul class="requirement-list">
          <li><div class="req-check">✓</div><span><strong>Bike</strong> — mountain bike appropriate for your division.</span></li>
          <li><div class="req-check">✓</div><span><strong>Helmet</strong> — CPSC-certified.</span></li>
          <li><div class="req-check">✓</div><span><strong>NICA Registration</strong> — completed online through TICL / NICA.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="events" class="events-section">
  <div class="events-container">
    <div class="events-header"><div><div class="section-label">2025 Season</div><h2>Race Calendar</h2></div></div>
    <div class="events-list">
      <div class="event-row"><div class="event-date"><div class="month">Mar</div><div class="day">01</div></div><div class="event-info"><h4>Season Kickoff Practice</h4><div class="location">📍 Pinkerton Park Trail System, Franklin, TN</div></div><div class="event-type type-practice">Practice</div><div class="event-arrow">→</div></div>
      <div class="event-row"><div class="event-date"><div class="month">Mar</div><div class="day">22</div></div><div class="event-info"><h4>TICL Race #1</h4><div class="location">📍 TBD — Tennessee</div></div><div class="event-type type-race">Race</div><div class="event-arrow">→</div></div>
    </div>
  </div>
</section>

<section id="volunteer">
  <div class="volunteer-section">
    <div class="volunteer-grid">
      <div>
        <div class="section-label">Get Involved</div>
        <h2>The Team<br>Runs on<br>Volunteers</h2>
        <div class="gold-line"></div>
      </div>
      <div class="volunteer-cta-box" id="join">
        <h3>Ready to<br>Help Out?</h3>
        <p>Fill out the interest form and our team director will be in touch.</p>
        <a href="#" class="btn-primary" style="display: inline-flex; margin-bottom: 16px;">Volunteer Sign-Up →</a>
      </div>
    </div>
  </div>
</section>

<div class="sponsors-section">
  <div class="sponsors-label">Team Sponsors & Partners — Interested in Supporting Franklin Cycling?</div>
  <div class="sponsors-row">
    <div class="sponsor-slot">Your Brand Here</div>
    <div class="sponsor-slot">Local Sponsor</div>
    <div class="sponsor-slot">Partner</div>
    <div class="sponsor-slot">Supporter</div>
  </div>
</div>

<?php get_footer(); ?>
