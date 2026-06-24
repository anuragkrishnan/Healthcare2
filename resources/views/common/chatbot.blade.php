<!-- ============================================ -->
<!-- CHATBOT WIDGET  -->
<!-- ============================================ -->
<div class="chat-widget" id="chatWidget">
    <div class="chat-panel" role="dialog" aria-label="Chat support" aria-hidden="true">
        <div class="chat-header">
            <div class="avatar">
                <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path
                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                </svg>
            </div>
            <div class="meta">
                <div class="name">Aria · Support Assistant</div>
                <div class="status"><span class="dot"></span> Online now</div>
            </div>
            <button class="close-btn" id="closeBtn" aria-label="Close chat">
                <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round">
                    <path d="M18 6 6 18M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="chat-body" id="chatBody">
            <div class="msg-row bot">
                <div class="msg-avatar">
                    <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                    </svg>
                </div>
                <div>
                    <div class="msg-bubble">Hi there 👋 I'm Aria. How can I help you today?</div>
                    <div class="msg-time">Just now</div>
                </div>
            </div>
            <div class="quick-replies" id="quickReplies">
                <button class="quick-reply" data-msg="Track my order">Track my order</button>
                <button class="quick-reply" data-msg="Pricing question">Pricing question</button>
                <button class="quick-reply" data-msg="Talk to a human">Talk to a human</button>
            </div>
        </div>

        <div class="chat-input-area">
            <textarea id="chatInput" rows="1" placeholder="Type your message…" aria-label="Type your message"></textarea>
            <button class="send-btn" id="sendBtn" aria-label="Send message" disabled>
                <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M22 2 11 13" />
                    <path d="M22 2 15 22l-4-9-9-4 20-7z" />
                </svg>
            </button>
        </div>
        <div class="chat-footer-note"> Replies may take a moment</div>
    </div>

    <button class="chat-launcher" id="chatLauncher" aria-label="Open chat" aria-expanded="false">
        <span class="chat-badge">1</span>
        <svg class="icon-chat" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <path
                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
        </svg>
        <svg class="icon-close" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5"
            stroke-linecap="round">
            <path d="M18 6 6 18M6 6l12 12" />
        </svg>
    </button>
</div>
