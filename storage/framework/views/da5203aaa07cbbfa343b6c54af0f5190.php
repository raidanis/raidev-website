

<?php $__env->startSection('title', 'Teaching - Raid Anis Kerkatou'); ?>

<?php $__env->startSection('content'); ?>
<section class="page-header">
    <div class="container">
        <h1>Teaching & Education</h1>
        <p class="page-subtitle">Courses, Lectures & Learning Resources</p>
    </div>
</section>

<section class="teaching-section">
    <div class="container">
        <div class="courses-grid">
            <!-- Course 1 -->
            <div class="course-card">
                <div class="course-header">
                    <h3>Advanced Algorithms (C++)</h3>
                    <span class="course-level">Advanced</span>
                </div>
                <p class="course-description">
                    Deep dive into algorithm design, analysis, and optimization. Topics include graph algorithms, 
                    dynamic programming, greedy algorithms, and computational complexity.
                </p>
                <div class="course-details">
                    <div class="detail-item">
                        <strong>Duration:</strong> 12 weeks
                    </div>
                    <div class="detail-item">
                        <strong>Level:</strong> Advanced
                    </div>
                    <div class="detail-item">
                        <strong>Language:</strong> C++
                    </div>
                </div>
                <div class="course-resources">
                    <h4>Resources:</h4>
                    <ul>
                        <li><a href="#">📊 Lecture Slides (12 PDFs)</a></li>
                        <li><a href="#">💻 Code Examples & Templates</a></li>
                        <li><a href="#">📝 Problem Sets (12 assignments)</a></li>
                        <li><a href="#">✅ Solutions & Explanations</a></li>
                    </ul>
                </div>
                <div class="course-action">
                    <a href="#" class="btn btn-secondary">Access Course</a>
                </div>
            </div>

            <!-- Course 2 -->
            <div class="course-card">
                <div class="course-header">
                    <h3>Linux Basics & System Administration</h3>
                    <span class="course-level">Beginner</span>
                </div>
                <p class="course-description">
                    Introduction to Linux operating system, command-line tools, file system, shell scripting, 
                    and basic system administration tasks.
                </p>
                <div class="course-details">
                    <div class="detail-item">
                        <strong>Duration:</strong> 8 weeks
                    </div>
                    <div class="detail-item">
                        <strong>Level:</strong> Beginner
                    </div>
                    <div class="detail-item">
                        <strong>Topics:</strong> CLI, Bash, Users/Permissions
                    </div>
                </div>
                <div class="course-resources">
                    <h4>Resources:</h4>
                    <ul>
                        <li><a href="#">📺 Video Tutorials (20+ hours)</a></li>
                        <li><a href="#">📖 Comprehensive Textbook</a></li>
                        <li><a href="#">🛠️ Pre-configured VMs</a></li>
                        <li><a href="#">🎯 Hands-on Exercises</a></li>
                    </ul>
                </div>
                <div class="course-action">
                    <a href="#" class="btn btn-secondary">Access Course</a>
                </div>
            </div>

            <!-- Course 3 -->
            <div class="course-card">
                <div class="course-header">
                    <h3>AI Fundamentals</h3>
                    <span class="course-level">Beginner</span>
                </div>
                <p class="course-description">
                    Foundation course covering AI concepts, machine learning basics, neural networks, 
                    and practical applications. No prior ML experience required.
                </p>
                <div class="course-details">
                    <div class="detail-item">
                        <strong>Duration:</strong> 10 weeks
                    </div>
                    <div class="detail-item">
                        <strong>Level:</strong> Beginner
                    </div>
                    <div class="detail-item">
                        <strong>Tools:</strong> Python, PyTorch
                    </div>
                </div>
                <div class="course-resources">
                    <h4>Resources:</h4>
                    <ul>
                        <li><a href="#">📚 21 Lecture Slides</a></li>
                        <li><a href="#">🔬 Jupyter Notebooks</a></li>
                        <li><a href="#">📋 10 Programming Projects</a></li>
                        <li><a href="#">🧪 Exam Solutions (QCM)</a></li>
                    </ul>
                </div>
                <div class="course-action">
                    <a href="#" class="btn btn-secondary">Access Course</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Teaching Philosophy -->
<section class="teaching-philosophy">
    <div class="container">
        <h2 class="section-title">Teaching Philosophy</h2>
        <div class="philosophy-content">
            <p>
                I believe in making complex subjects accessible without sacrificing rigor. My teaching approach combines:
            </p>
            <div class="philosophy-points">
                <div class="point">
                    <h4>📖 Clear Conceptual Understanding</h4>
                    <p>Focus on understanding why things work, not just how to use them.</p>
                </div>
                <div class="point">
                    <h4>🏋️ Hands-on Practice</h4>
                    <p>Learning by doing. Every concept is reinforced with coding exercises and real-world problems.</p>
                </div>
                <div class="point">
                    <h4>🔬 Research-Driven Content</h4>
                    <p>Material is grounded in latest research and industry best practices.</p>
                </div>
                <div class="point">
                    <h4>🎯 Student-Centered Learning</h4>
                    <p>Adaptable pace, multiple resources, and support for diverse learning styles.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\RAIdev\resources\views/teaching.blade.php ENDPATH**/ ?>