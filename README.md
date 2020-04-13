# Customize Email Subject plugin for MantisBT

Copyright (c) 2013 eCola GmbH, Heiko Schneider-Lange

## Description

_CustomizeEmailSubject_ is a plugin for [MantisBT](http://mantisbt.org) that 
allows the administrator to alter the subject of the notification emails.

See the [Change log](CHANGELOG.md).


## Installation

### Requirements

The plugin requires MantisBT version 2.0.0 or later.

For legacy 1.2.x installations, please download
[version 0.1.2](https://github.com/mantisbt-plugins/CustomizeEmailSubject/releases/tag/v0.1.2).
MantisBT 1.3.x is not supported.

### Setup Instructions

1. Download or clone a copy of the 
   [plugin's code](https://github.com/mantisbt-plugins/CustomizeEmailSubject).
2. Copy the plugin (the `CustomizeEmailSubject/` directory) into your Mantis
   installation's `plugins/` directory.
3. While logged in as an administrator, go to *Manage → Manage Plugins*.
4. In the *Available Plugins* list, you'll find the *CustomizeEmailSubject* plugin;
   click the **Install** link.
5. In the *Installed Plugins* list, click on the **CustomizeEmailSubject** plugin to configure it.

## Configuration

The email subject can be customized on the plugin's config page.

The following **variables** can be used in combination with any other text,
except the pipe symbol (`|`):

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

The pipe symbol is used to wrap the variables, to separate them from regular 
text, e.g. `[|project_name| |bug_id| |status|]: |summary|`.

## Support

If you wish to file a
[bug report](https://github.com/mantisbt-plugins/CustomizeEmailSubject/issues/new),
or have questions related to use and installation, please use the plugin's
[issues tracker](http://github.com/mantisbt-plugins/CustomizeEmailSubject/issues)
on GitHub.

All code contributions (bug fixes, new features and enhancements, translations) 
are welcome and highly encouraged, preferably as a
[Pull Request](https://github.com/mantisbt-plugins/CustomizeEmailSubject/compare).

The latest source code is available on
[GitHub](https://github.com/mantisbt-plugins/CustomizeEmailSubject).
