# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedii.github.io)

<br/>
<br/>

# Update Handler (new messages)

## what is this ?
when your bot users do interact with your bot, telegram sends new requests to your server, and the Update class, handles automatically every type of request (update) that comes from telegram servers  and you don't need to do anything

<br>


## # Update Types

telegram sends bellow update types :

<br>

## * message

when your bot users send new messages (text,voice,audio,document,video,animation,sticker) to your bot, telegram send update by type message. 
so when telegram sends an update by type message, this update is directed to MessageHandler class and you can work on message updates in the MessageHandler class, comfortably

[see more about MessageHandler](controllers/messageHandler.md)

<hr>

## * edited_message

when your bot users edits a message, telegram send update by type edited_message.
so when telegram sends an update by type edited_message, this update is directed to EditedMessageHandler class and you can work on edited_message updates in the EditedMessageHandler class, comfortably

[see more about EditedMessageHandler](controllers/editedMessageHandler.md)

<hr>

## * channel_post

when admins send new post to channel, telegram send update by type channel_post.
so when telegram sends an update by type channel_post, this update is directed to ChannelPostHandler class and you can work on channel_post updates in the ChannelPostHandler class, comfortably

[see more about ChannelPostHandler](controllers/channelPostHandler.md)

<hr>

## * inline_query

when telegram sends an update by type inline_query, this update is directed to InlineQueryHandler class and you can work on inline_query updates in the InlineQueryHandler class, comfortably

[see more about InlineQueryHandler](controllers/inlineQueryHandler.md)

<hr>

## * callback_query

when telegram sends an update by type callback_query, this update is directed to CallbackQueryHandler class and you can work on callback_query updates in the CallbackQueryHandler class, comfortably

[see more about CallbackQueryHandler](controllers/callbackQueryHandler.md)

<hr>