# Example AnyChannel integration with Wordpress using Node Express (Tutorial Version)

## Description
This repository contains the source code for an integration service that connects
Zendesk to Wordpress.  It is intended to be used with the AnyChannel tutorial.
The tutorial instructs you to implement functionality in the wordpress.js file. Relevant code is already present in wordpress.js, but is commented out.

It only works with Wordpress instances that have the "rest-api" and "JSON Basic Authentication"
plug-ins.

NOTE: The non-tutorial version is located at https://github.com/zendesk/sample_wordpress_anychannel_integration

NOTE: THIS IS NOT AN EXAMPLE OF A PROPERLY SECURED INTEGRATION.  It's intentionally as simple as reasonable, and it skips best practices like using oauth and handling errors gracefully.  Production integrations should NOT use basic authentication.

## Copyright and license
Copyright 2015 Zendesk
Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License.
You may obtain a copy of the License at
http://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
