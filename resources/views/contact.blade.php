@extends('layouts.app')

@section('title', 'Contact - Raid Anis Kerkatou')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>Get In Touch</h1>
        <p class="page-subtitle">Let's collaborate on Quantum AI & Cybersecurity research</p>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Form -->
            <div class="contact-form-wrapper">
                <h2>Send me a message</h2>
                <form class="contact-form" method="POST" action="/contact">
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="6" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="topic">Topic of Interest (Optional)</label>
                        <select id="topic" name="topic">
                            <option value="">Select a topic</option>
                            <option value="research-collaboration">Research Collaboration</option>
                            <option value="speaking-engagement">Speaking Engagement</option>
                            <option value="consulting">Consulting</option>
                            <option value="job-opportunity">Job Opportunity</option>
                            <option value="general">General Inquiry</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="contact-info-wrapper">
                <h2>Contact Information</h2>
                
                <div class="contact-method">
                    <div class="contact-icon">✉️</div>
                    <div>
                        <h4>Email</h4>
                        <p><a href="mailto:raid@raidev.com">raid@raidev.com</a></p>
                        <p style="font-size: 0.9rem; color: #aaa;">Response within 24-48 hours</p>
                    </div>
                </div>

                <div class="contact-method">
                    <div class="contact-icon">💼</div>
                    <div>
                        <h4>LinkedIn</h4>
                        <p><a href="https://linkedin.com" target="_blank">linkedin.com/in/raid-anis-kerkatou</a></p>
                        <p style="font-size: 0.9rem; color: #aaa;">For professional connections</p>
                    </div>
                </div>

                <div class="contact-method">
                    <div class="contact-icon">💻</div>
                    <div>
                        <h4>GitHub</h4>
                        <p><a href="https://github.com" target="_blank">github.com/raidanis</a></p>
                        <p style="font-size: 0.9rem; color: #aaa;">Check out my projects</p>
                    </div>
                </div>

                <div class="contact-method">
                    <div class="contact-icon">📚</div>
                    <div>
                        <h4>Google Scholar</h4>
                        <p><a href="https://scholar.google.com" target="_blank">scholar.google.com/raidanis</a></p>
                        <p style="font-size: 0.9rem; color: #aaa;">All publications</p>
                    </div>
                </div>

                <!-- Availability -->
                <div class="availability-box">
                    <h4>Availability</h4>
                    <div class="availability-items">
                        <p><strong>Research Collaborations:</strong> Always open</p>
                        <p><strong>Speaking Engagements:</strong> 2-3 per year</p>
                        <p><strong>Consulting:</strong> Limited availability</p>
                        <p><strong>Coffee Chats:</strong> By appointment</p>
                    </div>
                </div>

                <!-- Interest Areas -->
                <div class="interest-box">
                    <h4>I'm Interested In</h4>
                    <ul class="interest-list">
                        <li>Quantum machine learning applications</li>
                        <li>Cybersecurity research partnerships</li>
                        <li>Joint publications & papers</li>
                        <li>PhD student supervision</li>
                        <li>Industry collaborations</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Resources -->
<section class="resources-section">
    <div class="container">
        <h2 class="section-title">Additional Resources</h2>
        <div class="resources-grid">
            <div class="resource-card">
                <h4>📖 Read My Blog</h4>
                <p>Explore articles and tutorials on Quantum AI, machine learning, and cybersecurity.</p>
                <a href="/blog" class="btn btn-secondary btn-sm">Visit Blog</a>
            </div>
            <div class="resource-card">
                <h4>📂 View My Research</h4>
                <p>Check out my latest publications, projects, and ongoing research work.</p>
                <a href="/research" class="btn btn-secondary btn-sm">Explore Research</a>
            </div>
            <div class="resource-card">
                <h4>📊 Portfolio</h4>
                <p>See engineering portfolios including quantum ML and computer vision projects.</p>
                <a href="/portfolio" class="btn btn-secondary btn-sm">View Portfolio</a>
            </div>
        </div>
    </div>
</section>

@endsection
