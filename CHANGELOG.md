# Change Log for the CustomizeEmailSubject MantisBT plugin

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/)
specification.


## [Unreleased]

### Added

- Support for MantisBT 2.x
- Button to reset to default template

### Changed

- require language files based on user_pref_get_language(user_id)
- Moved hardcoded strings to language files
- Improved config screen layout
- Code cleanup

### Removed

- Support for MantisBT 1.x


## [0.1.2] - 2013-07-17

### Added

- New field: reason
- Ability to customize strings via language files


## [0.1.1] - 2013-07-03

### Fixed

- Bugfix for handler field


## [0.1.0] - 2013-03-15

### Added

- Initial release


[Unreleased]: https://github.com/mantisbt-plugins/CustomizeEmailSubject/compare/v0.1.2...HEAD

[0.1.2]: https://github.com/mantisbt-plugins/CustomizeEmailSubject/compare/v0.1.1...v0.1.2
[0.1.1]: https://github.com/mantisbt-plugins/CustomizeEmailSubject/compare/v0.1.0...v0.1.1
[0.1.0]: https://github.com/mantisbt-plugins/CustomizeEmailSubject/compare/b23a926c3e689c61e8dd357ffefe97f3fb8ac94c...v0.1.0
