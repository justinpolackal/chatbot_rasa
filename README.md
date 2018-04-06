# chatbot_rasa
Natural Language Processing (NLP) based chatbot project using rasa-nlu framework and PHP

For step by step explanation of setting up the project, refer: http://www.notespoint.com/chatbot-rasanlu-php-part-1/ 

The repository structure is as shown below. 

Explanation for some files that are not explained otherwise:
1. config-spacy.json - Configuration file for rasa-NLU
2. data directory contains training data
3. default - directory created by rasa-NLU for storing models, while training
4. logs - directory for keeping rasa-NLU logs files when rasa is run as an http server
5. run-rasanlu.sh is a shellscript used to run the rasa http server in the background.
6. www - directory contains all files that should go into the document root of the web server.
7. chatbot - contains chat UI components. They are taken from https://bootsnipp.com/snippets/featured/simple-chat. They are modified a little bit for the project's purpose.
8. chatservice.php - The php file for the chatbot engine.

For step by step explanation of setting up the project, refer: http://www.notespoint.com/chatbot-rasanlu-php-part-1/

References:
https://www.analyticsvidhya.com/blog/2018/01/faq-chatbots-the-future-of-information-searching/

Code reuse:
https://bootsnipp.com/snippets/featured/simple-chat


