# Hyde Buddy - Canary Alpha Release

<p class="lead">
Bridging the gap between flatfile content managment and a traditional CMS.
</p>

## About

Hyde Buddy is a psuedo-content management system that is built to be a companion to
developers building sites using [HydePHP](https://hydephp.github.io/).

Buddy is not at all a required software as Hyde is already incredibly simple and easy to use,
however, Buddy will be especially helpful to manage large Hyde sites and will include
features like realtime Markdown editing, and more.

## Usage

Buddy is installed as a Laravel application, and is going to be bundled with an executable
in the future. Buddy must be installed on the same system as your Hyde project, as it is
a local development tool that must be able to communicate with the HydeCLI. 

## System Requirements

- PHP 8.0 or higher
- A JavaScript enabled browser
- Desktop or laptop device capable of running PHP application servers
- Monitor with a minimum resolution of 720p. 1080p or higher is recommended
- Composer (when installing from source)

## Warning ⚠

**Never** install this on production systems. It's a local-only development tool
that edits the filesystem and runs executables. While I've locked down access
to only access the current project, that is more intended as a way to prevent
accidental changes to unrelated projects and files.

## Roadmap

* [ ] Add realtime Markdown editing
* [ ] Add form to create blog posts
* [ ] Add configuration options to save and change settings such as site label, HydeRC URI, preferences, etc. Can be stored in a JSON file.
* [ ] One-click install to create new Hyde sites?
* [ ] Make it easy to switch between sites/projects
* [ ] Add documentation
* [ ] Add tests
* [ ] Create the executables

### Attributions

#### Frontend
Frontend built with [Argon Dashboard 2](https://www.creative-tim.com/product/argon-dashboard), licensed MIT.

#### Icons
Icons by [Google Material Design](https://fonts.google.com/icons?selected=Material+Icons), licensed Apache 2.0.

#### Favicon

The favicon was generated using [graphics from Twitter Twemoji](https://github.com/twitter/twemoji/blob/master/assets/svg/1f436.svg), licensed [CC-BY 4.0](https://creativecommons.org/licenses/by/4.0/). <br>
<small>Copyright 2020 Twitter, Inc and other contributors (https://github.com/twitter/twemoji)</small>
