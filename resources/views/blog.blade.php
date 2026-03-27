@extends('layouts.app')

@section('title', 'Blog - Raid Anis Kerkatou')

@section('content')
<section class="page-header">
    <div class="container">
        <h1>Blog & Insights</h1>
        <p class="page-subtitle">Articles on Quantum AI, Cybersecurity & Machine Learning</p>
    </div>
</section>

<!-- Blog Posts -->
<section class="blog-section">
    <div class="container">
        <div class="blog-grid">
            <!-- Blog Post 1 -->
            <article class="blog-card">
                <div class="blog-header">
                    <h2><a href="#">QNN vs QSVM: Which is Better for Intrusion Detection?</a></h2>
                    <div class="blog-meta">
                        <span class="blog-date">March 15, 2026</span>
                        <span class="blog-category">Quantum ML</span>
                        <span class="blog-readtime">12 min read</span>
                    </div>
                </div>
                <p class="blog-excerpt">
                    In this comprehensive analysis, I compare two quantum machine learning approaches for intrusion detection systems. 
                    We'll explore the advantages and disadvantages of quantum neural networks versus quantum support vector machines, 
                    backed by experimental results and practical considerations...
                </p>
                <div class="blog-tags">
                    <span>#QuantumML</span>
                    <span>#IDS</span>
                    <span>#Comparison</span>
                </div>
                <a href="#" class="read-more">Read Full Article →</a>
            </article>

            <!-- Blog Post 2 -->
            <article class="blog-card">
                <div class="blog-header">
                    <h2><a href="#">Why Quantum AI is the Future of Cybersecurity</a></h2>
                    <div class="blog-meta">
                        <span class="blog-date">March 8, 2026</span>
                        <span class="blog-category">Cybersecurity</span>
                        <span class="blog-readtime">10 min read</span>
                    </div>
                </div>
                <p class="blog-excerpt">
                    Quantum computing promises unprecedented computational power. But how is this relevant to cybersecurity? 
                    In this article, I discuss the quantum threat, quantum-safe cryptography, and how quantum machine learning 
                    can revolutionize intrusion detection and threat prevention...
                </p>
                <div class="blog-tags">
                    <span>#QuantumComputing</span>
                    <span>#Cybersecurity</span>
                    <span>#Future</span>
                </div>
                <a href="#" class="read-more">Read Full Article →</a>
            </article>

            <!-- Blog Post 3 -->
            <article class="blog-card">
                <div class="blog-header">
                    <h2><a href="#">From PCA to Quantum Embeddings: A Feature Engineering Journey</a></h2>
                    <div class="blog-meta">
                        <span class="blog-date">February 28, 2026</span>
                        <span class="blog-category">ML Fundamentals</span>
                        <span class="blog-readtime">15 min read</span>
                    </div>
                </div>
                <p class="blog-excerpt">
                    Feature engineering is crucial for machine learning success. This post traces my journey from classical dimensionality reduction 
                    techniques like PCA to quantum feature encoding methods. We'll explore when to use each approach and why quantum embeddings 
                    might be the future...
                </p>
                <div class="blog-tags">
                    <span>#FeatureEngineering</span>
                    <span>#QuantumML</span>
                    <span>#PCA</span>
                </div>
                <a href="#" class="read-more">Read Full Article →</a>
            </article>

            <!-- Blog Post 4 -->
            <article class="blog-card">
                <div class="blog-header">
                    <h2><a href="#">How I Built a Hybrid QNN with PennyLane: A Step-by-Step Guide</a></h2>
                    <div class="blog-meta">
                        <span class="blog-date">February 20, 2026</span>
                        <span class="blog-category">Tutorial</span>
                        <span class="blog-readtime">20 min read</span>
                    </div>
                </div>
                <p class="blog-excerpt">
                    Want to build your first quantum neural network? In this practical tutorial, I walk through building a hybrid 
                    quantum-classical model using PennyLane. From circuit design to training optimization, we'll cover everything 
                    you need to get started with quantum machine learning...
                </p>
                <div class="blog-tags">
                    <span>#PennyLane</span>
                    <span>#Tutorial</span>
                    <span>#QuantumML</span>
                </div>
                <a href="#" class="read-more">Read Full Article →</a>
            </article>

            <!-- Blog Post 5 -->
            <article class="blog-card">
                <div class="blog-header">
                    <h2><a href="#">Understanding Variational Quantum Eigensolver (VQE) for Beginners</a></h2>
                    <div class="blog-meta">
                        <span class="blog-date">February 12, 2026</span>
                        <span class="blog-category">Quantum Computing</span>
                        <span class="blog-readtime">14 min read</span>
                    </div>
                </div>
                <p class="blog-excerpt">
                    VQE is one of the most promising NISQ-era algorithms. But what exactly is it, and how does it work? 
                    This beginner-friendly guide breaks down the Variational Quantum Eigensolver algorithm, its applications, 
                    and why it matters for near-term quantum computers...
                </p>
                <div class="blog-tags">
                    <span>#VQE</span>
                    <span>#QuantumAlgorithms</span>
                    <span>#NISQ</span>
                </div>
                <a href="#" class="read-more">Read Full Article →</a>
            </article>

            <!-- Blog Post 6 -->
            <article class="blog-card">
                <div class="blog-header">
                    <h2><a href="#">Benchmarking FL Networks: Challenges and Solutions</a></h2>
                    <div class="blog-meta">
                        <span class="blog-date">February 5, 2026</span>
                        <span class="blog-category">Research</span>
                        <span class="blog-readtime">11 min read</span>
                    </div>
                </div>
                <p class="blog-excerpt">
                    Federated learning is transforming privacy-preserving AI. But how do we evaluate and benchmark federated 
                    models effectively? This article discusses the unique challenges of FL evaluation and presents practical 
                    solutions and metrics for assessing federated learning systems...
                </p>
                <div class="blog-tags">
                    <span>#FederatedLearning</span>
                    <span>#Privacy</span>
                    <span>#Benchmarking</span>
                </div>
                <a href="#" class="read-more">Read Full Article →</a>
            </article>
        </div>
    </div>
</section>

<!-- Newsletter Signup -->
<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-box">
            <h3>Stay Updated</h3>
            <p>Subscribe to get the latest articles on Quantum AI and Cybersecurity delivered to your inbox.</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Your email address" required>
                <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>
        </div>
    </div>
</section>

@endsection
