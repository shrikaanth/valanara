<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valanera AI </title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Lucide Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lucide/0.344.0/lucide.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <!-- Cache busting meta tags -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
</head>
<body>
    <div class="main-container">
        <!-- Animated background particles -->
        <div class="background-particles">
            <div class="particles-container" id="particles"></div>
        </div>

        <!-- Navigation -->
    <?php include('includes/navbar.php')?>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                        <div class="hero-content text-center" id="heroContent">
                            <div class="hero-badge">
                                <i data-lucide="zap"></i>
                                <span>Powered by Advanced AI</span>
                            </div>
                            
                            <h1 class="hero-title">
                                Create <span class="gradient-text">Mystery</span><br>with Your Chats
                            </h1>
                            
                            <p class="hero-description">
                                Transform ordinary conversations into extraordinary connections with AI that understands 
                                emotion, context, and the art of meaningful communication.
                            </p>
                            
                            <div class="hero-buttons">
                                <button class="primary-button">
                                    <span>Start Creating Magic</span>
                                    <i data-lucide="arrow-right"></i>
                                </button>
                                <button class="secondary-button">Watch Demo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-header text-center">
                            <h2 class="section-title">
                                Why Choose <span class="gradient-text">Valanera?</span>
                            </h2>
                            <p class="section-description">
                                Advanced AI technology meets human emotion to create the perfect messaging experience.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i data-lucide="zap"></i>
                            </div>
                            <h3 class="feature-title">Instant Message Crafting</h3>
                            <p class="feature-description">Generate perfect messages in seconds with AI-powered suggestions that match your personality and tone.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i data-lucide="heart"></i>
                            </div>
                            <h3 class="feature-title">Emotional Intelligence</h3>
                            <p class="feature-description">Understand the emotional context and craft responses that create genuine connections.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i data-lucide="sparkles"></i>
                            </div>
                            <h3 class="feature-title">Mystery & Intrigue</h3>
                            <p class="feature-description">Add the perfect amount of mystery to keep conversations engaging and exciting.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i data-lucide="shield"></i>
                            </div>
                            <h3 class="feature-title">Privacy First</h3>
                            <p class="feature-description">Your conversations stay private. We don't store or share your personal messages.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works -->
        <section class="how-it-works-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-header text-center">
                            <h2 class="section-title">
                                How <span class="gradient-text">It Works</span>
                            </h2>
                            <p class="section-description">
                                Four simple steps to transform your conversations forever.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="step-card">
                            <div class="step-number">01</div>
                            <h3 class="step-title">Connect Your Chat</h3>
                            <p class="step-description">Integrate Valanera with your favorite messaging apps seamlessly.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="step-card">
                            <div class="step-number">02</div>
                            <h3 class="step-title">AI Analyzes Context</h3>
                            <p class="step-description">Our AI understands the conversation flow and emotional undertones.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="step-card">
                            <div class="step-number">03</div>
                            <h3 class="step-title">Get Perfect Suggestions</h3>
                            <p class="step-description">Receive multiple message options tailored to your situation.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="step-card">
                            <div class="step-number">04</div>
                            <h3 class="step-title">Send with Confidence</h3>
                            <p class="step-description">Choose your favorite suggestion and watch the magic happen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="testimonials-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-header text-center">
                            <h2 class="section-title">
                                What Our <span class="gradient-text">Users Say</span>
                            </h2>
                            <p class="section-description">
                                Join thousands who've transformed their conversations with Valanera AI.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-card">
                            <div class="testimonial-rating">
                                <i data-lucide="star" class="star-filled"></i>
                                <i data-lucide="star" class="star-filled"></i>
                                <i data-lucide="star" class="star-filled"></i>
                                <i data-lucide="star" class="star-filled"></i>
                                <i data-lucide="star" class="star-filled"></i>
                            </div>
                            <p class="testimonial-content">"Valanera transformed my dating conversations. I went from awkward messages to confident, engaging chats that actually get responses."</p>
                            <div class="testimonial-author">
                                <div class="author-avatar">A</div>
                                <div class="author-info">
                                    <h4 class="author-name">Alex Rivera</h4>
                                    <p class="author-role">Marketing Professional</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-card">
                            <div class="testimonial-rating">
                                <i data-lucide="star" class="star-filled"></i>
                                <i data-lucide="star" class="star-filled"></i>
                                <i data-lucide="star" class="star-filled"></i>
                                <i data-lucide="star" class="star-filled"></i>
                                <i data-lucide="star" class="star-filled"></i>
                            </div>
                            <p class="testimonial-content">"The AI perfectly captures my personality while adding that spark I was missing. My match rate has tripled!"</p>
                            <div class="testimonial-author">
                                <div class="author-avatar">S</div>
                                <div class="author-info">
                                    <h4 class="author-name">Sarah Chen</h4>
                                    <p class="author-role">Student</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-card">
                            <div class="testimonial-rating">
                                <i data-lucide="star" class="star-filled"></i>
                                <i data-lucide="star" class="star-filled"></i>
                                <i data-lucide="star" class="star-filled"></i>
                                <i data-lucide="star" class="star-filled"></i>
                                <i data-lucide="star" class="star-filled"></i>
                            </div>
                            <p class="testimonial-content">"Finally, an AI that understands context and emotions. Valanera doesn't just suggest words, it creates connections."</p>
                            <div class="testimonial-author">
                                <div class="author-avatar">M</div>
                                <div class="author-info">
                                    <h4 class="author-name">Marcus Johnson</h4>
                                    <p class="author-role">Software Engineer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats -->
        <section class="stats-section">
            <div class="container">
                <div class="row g-4 text-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="stat-card">
                            <div class="stat-number pink">50K+</div>
                            <div class="stat-label">Happy Users</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="stat-card">
                            <div class="stat-number purple">2M+</div>
                            <div class="stat-label">Messages Crafted</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="stat-card">
                            <div class="stat-number pink">95%</div>
                            <div class="stat-label">Success Rate</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="cta-container text-center">
                            <h2 class="cta-title">
                                Ready to Create <span class="gradient-text">Magic?</span>
                            </h2>
                            <p class="cta-description">
                                Join thousands of users who've transformed their conversations with Valanera AI.
                            </p>
                            <button class="cta-button">
                                <span>Start Your Journey</span>
                                <i data-lucide="arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="assets/js/script.js"></script>
</body>
</html>