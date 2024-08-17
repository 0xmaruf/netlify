
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Cybersecurity Portfolio</title>
<style>
  a {
     color:white;
   }
  body {
    background-color: #1a1a1a;
    color: #00ff00; /* Green text color */
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  header {
    background-color: #0d0d0d;
    padding: 1rem;
    text-align: center;
  }
  h1 {
    margin: 0;
    font-size: 2rem;
    color: #00ff00;
  }
  h2 {
    font-size: 1.5rem;
    color: #00ff00;
  }
  section {
    padding: 2rem;
    text-align: center;
  }
  .typing-animation {
    overflow: hidden;
    border-right: 0.15em solid #ff8800; /* Different orange text color */
    white-space: nowrap;
    margin: 0 auto;
    letter-spacing: 0.15em;
    animation: typing 15s steps(230) infinite alternate-reverse;
  }
  @keyframes typing {
    0%, 100% {
      width: 0;
    }
    50% {
      width: 100%;
    }
  }
  nav {
    background-color: #0d0d0d;
    text-align: center;
    padding: 1rem 0;
  }
  nav a {
    color: #00ff00;
    text-decoration: none;
    margin: 0 1rem;
    transition: color 0.3s;
  }

  nav a:hover {
    color: #33ff33;
  }
  .profile-picture {
    width: 160px;
    height: 160px;
    border-radius: 50%;
    margin: 20px auto;
    display: block;
    border: 2px solid #00ff00;
  }
  .swags-images {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
  }
  .swag-image {
    max-width: 200px;
    border: 2px solid #00ff00;
    border-radius: 10px;
  }
  .writeups-links {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
  }
  .writeup-link {
    border: 2px solid #00ff00;
    border-radius: 10px;
    padding: 10px;
    width: 80%;
    max-width: 400px;
    text-align: center;
  }
/* Add a new class for the skill levels */
  .skill-bar {
    width: 100%;
    height: 20px;
    background-color: #282828;
    border-radius: 10px;
    margin-top: 5px;
    position: relative;
  }
  /* Add a new class for the skill levels */
  .skill-level {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 0;
    background-color: #00ff00;
    border-radius: 10px;
    transition: width 0.3s ease;
  }
.hall-of-fame-list {
  display: flex;
  flex-wrap: wrap; /* Wrap to the next row when needed */
  align-items: flex-start; /* Align links to the left */
  gap: 10px;
}

.hof-link {
  flex: 1 0 calc(25% - 10px); /* Divide into 4 columns, subtract gap space */
  text-decoration: none;
  color: #33ff33; /* Link color */
  border: 2px solid #33ff33;
  border-radius: 10px;
  padding: 10px;
  max-width: 400px;
  text-align: center;
  transition: background-color 0.3s, color 0.3s;
}

.hof-link:hover {
  background-color: #33ff33; /* Hover background color */
  color: black; /* Hover text color */
}
</style>
</head>
<body>
  <header>
    <h1>Md Maruf Hosan</h1>
    <p> aka 0xmaruf </p>
    <img src="https://pbs.twimg.com/profile_images/1613395553202888704/lkPcmuM-_400x400.jpg" alt="Your Profile Picture" class="profile-picture">
  </header>
  <nav>
    <a href="#about">About Me</a>
    <a href="#skills">Skills</a>
    <a href="#swags">Swags</a>
    <a href="#hall-of-fame">Hall of Fame</a>
    <a href="#write-ups">Write-ups</a>
    <a href="#contact">Contact</a>
  </nav>
  <section id="about">
    <h2>About Me</h2>
    <p class="typing-animation"><span style="color: #ff8800;">Assalamualaikum!</span> I am a passionate Cybersecurity enthusiast with a penchant for exploring the uncharted realms of the digital landscape.</p>
    <p>With a background in Web Pentesting, Android Pentesting, and a seasoned CTF Player, I thrive on unraveling vulnerabilities and reinforcing the digital fortifications that safeguard our virtual world.</p>
    <p>I have a strong belief in ethical hacking and responsible disclosure, which led me to platforms like <a href="https://hackerone.com/0xmaruf" target="_blank" rel="noopener noreferrer">HackerOne</a> and <a href="https://bugcrowd.com/0xmaruf" target="_blank" rel="noopener noreferrer">Bugcrowd</a>, where I actively contribute to the community by reporting and resolving security vulnerabilities.</p>
  </section>
  <section id="skills">
    <h2>Skills</h2>
    <!-- Add skill with dynamic percentage -->
    <div class="skill">
      <span class="skill-label">Web Pentesting</span>
      <div class="skill-bar">
        <div class="skill-level" style="width: 95%;color:black;">95%</div>
      </div>
    </div>
    <!-- Add skill with dynamic percentage -->
    <div class="skill">
      <span class="skill-label">Android Pentesting</span>
      <div class="skill-bar">
        <div class="skill-level" style="width: 60%;color:black;">60%</div>
      </div>
    </div>
    <!-- Add skill with dynamic percentage -->
    <div class="skill">
      <span class="skill-label">CTF Challenges</span>
      <div class="skill-bar">
        <div class="skill-level" style="width: 30%;color:black;">30%</div>
      </div>
    </div>
  <section id="swags">
    <h2>Swags</h2>
    <div class="swags-images">
      <img src="https://pbs.twimg.com/media/C9r9X38U0AArIir?format=jpg" alt="Swag Image 1" class="swag-image">
      <img src="https://pbs.twimg.com/media/C9r9X38U0AArIir?format=jpg" alt="Swag Image 2" class="swag-image">
      <!-- Add more swag images here -->
    </div>
  </section>
  <section id="hall-of-fame">
    <h2>Hall of Fame</h2>
    <p>Celebrate the acknowledgments and recognitions received in the cybersecurity community.</p>
   <div class="hall-of-fame-list">
    <a href="https://bugcrowd.com/dell-com/hall-of-fame" class="hof-link">Dell</a>
    <a href="https://hackerone.com/citrix/thanks" class="hof-link">Citrix</a>
    <a href="https://test.com" class="hof-link" target="_blank">Coming</a>
    <a href="https://test.com" class="hof-link" target="_blank">Coming</a>
    <a href="https://test.com" class="hof-link" target="_blank">Coming</a>
    <a href="https://test.com" class="hof-link" target="_blank">Coming</a>
  </div>
  </section>
  <section id="write-ups">
    <h2>Write-ups</h2>
    <div class="writeups-links">
      <a href="https://0xmaruf.medium.com/firing-8-account-takeover-methods-77e892099050" target="_blank" rel="noopener noreferrer" class="writeup-link">Firing 8 Account Takeover Methods</a>
      <a href="https://0xmaruf.medium.com/dont-you-have-burpsuite-pro-a74efc7142c" target="_blank" rel="noopener noreferrer" class="writeup-link">Don't You Have BurpSuite Pro?</a>
      <a href="https://0xmaruf.medium.com/all-onliners-for-bug-bounty-hunters-7f77f5bd41b" target="_blank" rel="noopener noreferrer" class="writeup-link">All Oneliners for Bug Bounty Hunters</a>
      <!-- Add more write-up links here -->
    </div>
  </section>
  <section id="contact">
    <h2>Contact Me</h2>
    <p>Feel the urge to collaborate or challenge me? Let's connect.</p>
    <p>Email: 0xmaruf@wearehackerone.com</p>
 <div style="text-align: center;font-size:25px;">
      <a href="https://twitter.com/0xmaruf" class="social-icon" target="_blank">
        <span class="fab fa-twitter"></span>
      </a>
      <a href="https://www.linkedin.com/in/0xmaruf/" class="social-icon" target="_blank">
        <span class="fab fa-linkedin"></span>
      </a>
      <a href="https://facebook.com/0xmaruf" class="social-icon" target="_blank">
        <span class="fab fa-facebook"></span>
      </a>
    </div>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  </section>
</body>
</html>
