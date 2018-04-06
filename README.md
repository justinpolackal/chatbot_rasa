# chatbot_rasa
A chatbot using rasa-nlu framework and PHP

The repository structure is as shown below. 

├── config-spacy.json
├── data
│   └── trainingdata.json
├── default
│   └── model_20180405-161815
│       ├── crf_model.pkl
│       ├── intent_classifier.pkl
│       ├── metadata.json
│       └── training_data.json
├── logs
├── README.md
├── run-rasanlu.sh 
└── www
    ├── chatbot
    │   ├── chatbot.css
    │   ├── chatbot.html
    │   ├── chatbot.js
    │   ├── me.png
    │   └── you.png
    └── chatservice.php

Explanation for some files that are not explained otherwise:
1. "run-rasanlu.sh" is a shellscript used to run the rasa http server in the background.
2. www - directory contains all files that should go into the document root of the web server.
3. chat UI components found under www/chatbot directory are taken from https://bootsnipp.com/snippets/featured/simple-chat. They are modified a little bit for the project's purpose.

Refer: www.notespoint.com/ <> for detailed explanation of setting up the entire project.


