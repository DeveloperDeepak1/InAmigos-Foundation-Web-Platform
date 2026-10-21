<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inamingos Task1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Index.css">
</head>
<body>
    <header>
        <div class="navbar">
            <span class="logo">
                <img src="Img/Logo-mark.png" alt="InAmigos logo mark">
                <span class="brand-name"><span>InAmigos</span> <span class="foundation">Foundation</span></span>
            </span>
            <button class="nav-toggle" type="button" aria-label="Open navigation menu" aria-expanded="false" aria-controls="site-nav">
              <span></span>
              <span></span>
              <span></span>
            </button>
            <nav id="site-nav" aria-label="Main navigation">
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#projects">Project</a></li>
                    <li><a href="#impact">Impact</a></li>
                    <li><a href="#support">Support</a></li>
                </ul>
              <a class="button nav-donate" href="#support">Donate Now</a>
            </nav>
        </div>
    </header>

<!-- Bootstrap -->
 <div class="hero-carousel">
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="--slide-image: url('Img/1.png')" data-bs-interval="2000">
      <img src="Img/1.png" alt="Students supporting one another">
    </div>
    <div class="carousel-item" style="--slide-image: url('Img/2.png')" data-bs-interval="4000">
      <img src="Img/2.png" alt="Dogs receiving care through VOSD">
    </div>
    <div class="carousel-item" style="--slide-image: url('Img/3.png')" data-bs-interval="6000">
      <img src="Img/3.png" alt="Students learning computer skills">
    </div>
    <div class="carousel-item" style="--slide-image: url('Img/4.png')" data-bs-interval="6000">
      <img src="Img/4.png" alt="Children participating in an outdoor activity">
    </div>
  </div>
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev" aria-label="Previous slide">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next" aria-label="Next slide">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </button>
</div>
</div>

<!-- About Page Section -->
<section class="section about-section" id="about">
      <div class="section-heading">
        <p>Who We Are</p>
        <h2>InAmigos Foundation</h2>
        <span class="heading-accent" aria-hidden="true"></span>
      </div>

      <div class="about-grid">
        <div class="about-content">
          <p class="about-lead">
            InAmigos Foundation is a non-profit organization committed to fostering
            community development and social empowerment through impactful and
            sustainable initiatives.
          </p>

          <p>
            The foundation works across different social causes including food and
            clothing distribution, child welfare and education, women empowerment,
            animal welfare, environmental conservation, social inclusion, and
            youth skill development.
          </p>

          <p>
            Through volunteers, campaigns, community participation, and awareness
            activities, InAmigos Foundation encourages people to become active
            contributors to positive social change.
          </p>

          <div class="about-pillars" aria-label="Our areas of work">
            <span>Community-led</span>
            <span>Inclusive</span>
            <span>Sustainable</span>
          </div>
        </div>

        <div class="purpose-card">
          <span class="purpose-icon" aria-hidden="true">✦</span>
          <p class="purpose-kicker">Our purpose</p>
          <h3>Purpose of the Projects</h3>
          <p>
            To connect empathy with action and create meaningful impact for
            underprivileged communities, children, women, stray animals, and the
            environment.
          </p>
          <a class="purpose-link" href="#projects">Explore our initiatives <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </section>

<!-- Project Section -->

 <section class="projects" id="projects">
        <div class="section-header">
            <p class="section-label">OUR INITIATIVES</p>
            <h2>6 Projects, One Mission</h2>
          <p class="section-intro">Small actions, lasting change. Explore how we work with communities to build a kinder, stronger future.</p>
        </div>
        <div class="projects-grid">

          <article class="project-card">
                <span class="project-icon">🍱</span>
                <h3>Project Seva</h3>
                <p>Food and clothing distribution for the underprivileged.
                    Over 50,000+ meals and essential items distributed across communities.
                </p>
          </article>

          <article class="project-card">
                <span class="project-icon">📚</span>
                <h3>Project Bachpanshala</h3>
                <p>Bridging educational gaps by providing quality education,
                    digital literacy and life skills to underprivileged children.
                </p>
          </article>

          <article class="project-card">
                <span class="project-icon">🦋</span>
                <h3>Project Udaan</h3>
                <p>Women empowerment through skill development programs,
                    promoting financial independence and social dignity.
                </p>
          </article>

          <article class="project-card">
                <span class="project-icon">🌿</span>
                <h3>Project Prakriti</h3>
                <p>Environmental conservation and sustainability efforts
                    to protect our planet for future generations.
                </p>
          </article>

          <article class="project-card">
                <span class="project-icon">🐾</span>
                <h3>Project Jeev</h3>
                <p>Animals welfare initiatives focused  on protecting,
                    caring for and rehabilitating animals across India.
                </p>
          </article>

          <article class="project-card">
                <span class="project-icon">💼</span>
                <h3>Project Vikas</h3>
                <p>Enhancing employability of youth through structured
                    skill development and career-readiness programs. 
                </p>
          </article>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="impact-section" id="impact" aria-labelledby="impact-title">
      <div class="impact-container">
        <header class="impact-heading">
          <p class="impact-eyebrow">Our impact</p>
          <h2 id="impact-title">Numbers That Speak</h2>
          <p class="impact-intro">Behind every number is a person, a community, and a little more hope for tomorrow.</p>
        </header>

        <div class="impact-grid">
          <article class="impact-card">
            <p class="impact-number">50,000<span>+</span></p>
            <p class="impact-description">Meals distributed</p>
          </article>
          <article class="impact-card">
            <p class="impact-number">200</p>
            <p class="impact-description">Active volunteers</p>
          </article>
          <article class="impact-card">
            <p class="impact-number">28</p>
            <p class="impact-description">States covered</p>
          </article>
          <article class="impact-card">
            <p class="impact-number">6</p>
            <p class="impact-description">Flagship projects</p>
          </article>
        </div>
      </div>
    </section>
<!-- Support Section -->
    <section class="support-section" id="support" aria-labelledby="support-title">
      <div class="support-card">
        <p class="support-eyebrow">A little help goes a long way</p>
        <h2 id="support-title">Be a part of the change</h2>
        <p class="support-copy">Your time, your voice, or a helping hand can make a real difference. Join us in supporting people and communities with care.</p>
        <div class="support-actions">
          <a class="support-button support-button-primary" href="https://inamigosfoundation.org.in/">Our Official Page</a>
          <a class="support-button support-button-secondary" href="https://inamigosfoundation.org.in/contact">Connect with Us</a>
          <a class="support-button support-button-secondary" href="https://inamigosfoundation.org.in/">💚 Donate</a>
        </div>
      </div>
    </section>


<!-- Footer -->
  <footer class="footer">
    <div class="footer-content">
      <p class="footer-logo"><span aria-hidden="true">🤝</span> InAmigos Foundation</p>
      <p class="footer-note">NGO Awareness Webpage created for Web Development Internship Task 1.</p>
      <nav class="footer-tags" aria-label="Related topics">
        <a href="#about">#InAmigos</a>
        <a href="#about">#InAmigosFoundation</a>
        <a href="#projects">#NGOAwareness</a>
        <a href="#impact">#SocialImpact</a>
        <a href="#support">#VolunteerForChange</a>
        <a href="#projects">#CommunityDevelopment</a>
        <a href="#support">#SupportNGO</a>
      </nav>
      <div class="footer-contact">
        <span>Ward No.5, Gram Post, Bilaspur, Chhattisgarh</span>
        <a href="https://inamigosfoundation.org.in/" target="_blank" rel="noopener noreferrer">inamigosfoundation.org.in</a>
      </div>
      <p class="footer-bottom">© 2024 InAmigos Foundation. All rights reserved.</p>
    </div>
  </footer>

    <script>
    // This watches elements and adds 'visible' class when they appear on screen
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.15 });

    // Apply observer to all elements with fade-in class
    document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
    });
</script>
<script>
  const navToggle = document.querySelector('.nav-toggle');
  const siteNav = document.querySelector('#site-nav');

  navToggle.addEventListener('click', () => {
    const isOpen = navToggle.getAttribute('aria-expanded') === 'true';
    navToggle.setAttribute('aria-expanded', String(!isOpen));
    navToggle.setAttribute('aria-label', isOpen ? 'Open navigation menu' : 'Close navigation menu');
    siteNav.classList.toggle('is-open', !isOpen);
  });

  siteNav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
      navToggle.setAttribute('aria-expanded', 'false');
      navToggle.setAttribute('aria-label', 'Open navigation menu');
      siteNav.classList.remove('is-open');
    });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>