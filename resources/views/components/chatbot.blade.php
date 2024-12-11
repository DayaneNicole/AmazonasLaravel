<div id="chatbot" class="position-fixed bottom-0 end-0 m-3">
    <button class="btn btn-primary rounded-circle" onclick="toggleChatbot()">
        <i class="bi bi-chat-dots"></i>
    </button>
    <div id="chatbot-window" class="card d-none" style="width: 300px;">
        <div class="card-header bg-primary text-white">
            Chat con nosotros
            <button type="button" class="btn-close btn-close-white float-end" onclick="toggleChatbot()"></button>
        </div>
        <div class="card-body" style="height: 300px; overflow-y: auto;">
            <div id="chat-messages"></div>
        </div>
        <div class="card-footer">
            <div class="input-group">
                <input type="text" id="user-input" class="form-control" placeholder="Escribe tu mensaje...">
                <button class="btn btn-primary" onclick="sendMessage()">Enviar</button>
            </div>
        </div>
    </div>
</div>

<script>
function toggleChatbot() {
    const chatbotWindow = document.getElementById('chatbot-window');
    chatbotWindow.classList.toggle('d-none');
}

function sendMessage() {
    const userInput = document.getElementById('user-input');
    const chatMessages = document.getElementById('chat-messages');
    const message = userInput.value.trim();

    if (message) {
        // Add user message
        chatMessages.innerHTML += `<p><strong>You:</strong> ${message}</p>`;
        userInput.value = '';

        // Simulate bot response (replace with actual chatbot logic)
        setTimeout(() => {
            const botResponse = "Thank you for your message. How can I assist you today?";
            chatMessages.innerHTML += `<p><strong>Bot:</strong> ${botResponse}</p>`;
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }, 1000);
    }
}
</script>