![Scan SQL Injection](https://www.tariqhawis.com/img/injectbot/injectbot-logo.png)


# InjectBot&trade;

A web-based, easy-to-use, SQL injection scanner and exploiter tool. 

# Why InjectBot?

Unlike other SQLi tools out there, InjectBot is so simple to use, yet very fast compared to other SQL tools. (*like 1 to 10 faster!!*)

* InjectBot is as simple as Google with web search; A input box to provide the target, and a list of scan/attack options, and finally a terminal-like screen to show the results of the scanning.

* In case the provided target is vulnerable to SQLi, InjectBot will save the target's state with a small rectangle indicating the saved target, and any next scan/attack actions performed will be saved for you to speed up the scan and cut any repeatable steps during the scan on the target. Then whenever you finish with the target, just click on the `x` mark (See the demo down below..).


**Current Features:**

* Scan the target only to see whether it's vulnerable.

* Get target's database and server information.

* Get tables information from the current database.

* Fetch data rows of selected table (select from the table list saved previously).

* Switch between classic and blind SQLi in options above.


# DEMO

A complete scan to a web app showing all the above features in only 23 seconds.

![InjectBot SQLi scanning Demo](https://www.tariqhawis.com/img/injectbot/injectbot-demo.gif)


# Who should use InjectBot?

Whether you are a web developer or pen tester, red or blue teamer, this tools would be perfect to be in your tools arsenal to test web applications against SQL Injection vulnerabilities.


# Installation


Choose your best option below then open at your browser: `http://localhost:11111`


- Option #1: Suitable for linux and MacOS users..

Just run the script `run.sh` that comes with the script as follows 

```bash
./run.sh
```

>Note: in this option you need to have php and php-curl installed in you machine. 


- Option #2: Suitable for Windows (and Linux & MacOS) users..

Your best option here is to use docker, for that you may build your image and run the container:

```bash
docker build -t injectbot .
docker run -d --name injectbot -p 11111:80 injectbot
```
 
Or call the updated image from our docker hub:

```bash
docker run --name injectbot -d -p 11111:80 tariqhawis/injectbot:latest
```

If you have any issue with the installation, contact me at [github issues](https://github.com/tariqhawis/injectbot/issues), and I will be glad to help:)


# Version History/Changelog

InjectBot v0.1.0 stable

* [+] Complete transition from procedural to object-oriented structure.
	* [-] Troubleshooting has become much easier with modularity.
	* [-] Scalability is now possible, adding features such as new SQLi techniques is much easier.
	* [-] The code structure is understandable, any developer who wants to jump in can understand the idea of each step, also comments added for that purpose.

* [+] Increase the speed of HTTP response by 20 times
	* [-] Use Multi cURL functions instead of file_get_contents for faster response.
	* [-] Ability to send multi requests in parallel.
	* [-] Send header requests for blind SQLi.
	* [-] Use content-length from the header instead of str_len for the whole page!

* [+] Remove iterations by saving scanning state.
	* [-] Use sessions to save the state of the target while the scanning progress.

* [+] Add blind SQLi scanning mode for fetching table schema and data records

* [+] Bugfixes
	* [-] Fixed content-length with returned -1.
	* [-] Fixed exploitable number inside html tags for some webpages.

* [+] New front-end design based on Bootstrap 4.


# Have an idea for InjectBot?

There are plenty of improvements this script could use, If you want to add something and have any cool idea related to this tool, please contact me using [github issues](https://github.com/tariqhawis/injectbot/issues) and I will update the master version.

If you are a PHP developer yourself, feel free to PR this tool, and I will merge the good ideas.


# Looking for a useful SQL Injection Course?

Contact me if you are looking for a course on web penetration testing, web application security, or a course explosively on SQL Injection, I am preparing for attackers and defenders (100% technical).


# Advisory

This tool should be used for authorized penetration testing and/or educational purposes only. 
Any misuse of this software will not be the responsibility of the author or of any other collaborator. 
Use it at your own networks and/or with the network owner's permission.


GPL-3.0 License 2020 InjectBot&trade; - By Tariq Hawis
