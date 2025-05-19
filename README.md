# invisiblewingsgame.com

**This is the repository for the website for Invisible Wings: Chapter One.**  
**Note: This repository has been archived. The content of this website has been merged into [audune.com](https://github.com/audunegames/audune.com).**

This site is made in PHP using [Feather](https://github.com/danae/feather). The provided [Dockerfile](https://github.com/audunegames/invisiblewingsgame.com/blob/master/Dockerfile) builds an image that installs PHP and JS dependencies and serves the site using Apache2 with mod_php.

An image from this Dockerfile will be built and published to the GitHub Container Registry on every push or pull request using a [GitHub action](https://github.com/audunegames/invisiblewingsgame.com/blob/master/.github/workflows/docker-publish.yml).

## Installation

You can pull the current version of the image with the following command:

```bash
docker pull ghcr.io/audunegames/invisiblewingsgame.com:master
```

Other versions of the package can be found [here](https://github.com/audunegames/invisiblewingsgame.com/pkgs/container/invisiblewingsgame.com).

## Local development

Install Apache2 with PHP >= 8.0 and Composer, and NodeJS and npm. Clone the repository inside of the root of the web server. Install the PHP dependencies with Composer and the JS dependencies with npm, then browse to the web files.