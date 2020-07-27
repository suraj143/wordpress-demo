#!/bin/sh
set -e

echo "Installing Weavescope"
sudo curl -L git.io/scope -o /usr/local/bin/scope
sudo chmod a+x /usr/local/bin/scope
scope launch

echo "open your browser to http://localhost:4040"

