Customize Email Subject for MantisBT
====================================

Works with MantisBT 1.2.14.

For my employer I developed this small plugin for Mantis bugtracker. We use it to add the status of a bug to each sent email.

In order to run this plugin, you have to patch the following files:
- core/events_inc.php
- core/email_api.php


The patches are available on mantisbt.org bugtracker:
- http://www.mantisbt.org/bugs/view.php?id=15647
- http://www.mantisbt.org/bugs/view.php?id=15648


After you installed the patches and this plugin, you can edit the email subject on a config page.
You can use these variables in the subject:
- project_name
- bug_id
- summary
- handler
- priority
- severity
- reproducibility
- status
- resolution
- projection
- category
- reason

You can combine the variables with any other text except the pipe(|) symbol. 
The pipe symbol is used to seperate the variables from the other text, e.g. "[|project_name| |bug_id| |status|]: |summary"
