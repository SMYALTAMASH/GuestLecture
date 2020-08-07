# Configuration Management

## Ansible: 
Definition: Push based, agentless, open source, easy to use configuration management tool.

## Ansible Structure:
```
.
├── group_vars
│   └── apache.yml
├── hosts
├── playbook.yml
├── README.md
└── roles
    ├── apache2website
    │   ├── defaults
    │   │   └── main.yml
    │   ├── files
    │   │   ├── basicPhp.sh
    │   │   └── websiteCode
    │   │       ├── data.txt
    │   │       ├── index.html
    │   │       ├── path
    │   │       ├── process.php
    │   │       ├── README.txt
    │   │       └── tiger.jpg
    │   ├── handlers
    │   │   └── main.yml
    │   ├── meta
    │   │   └── main.yml
    │   ├── tasks
    │   │   └── main.yml
    │   ├── templates
    │   │   └── index.html.j2
    │   └── vars
    │       └── main.yml
    └── basicPackages
        └── tasks
            └── main.yml
```

* FILE "hosts"         						: contains the serverIPs and connection information, server groups and host variables, file name can be changed as per our needs.
* FILE "playbook.yml"  						: contains the playbook to run, you can have your custom filename instead of playbook.yml as well as per your needs.
* FILE "group_vars/apache.yml"				: conatins any variables which specificly targets apache host group defined in "hosts" file.
* FILE "apache2website/defaults/main.yml"	: contains the safe default variables required for the role apache2website.
* FILE "apache2website/files/\*"			: contains the static files which need to be just copied to the server without modifications.
* FILE "apache2website/handlers/main.yml"	: conatins the handlers to start, stop, restart, reload the service after specific job is done.
* FILE "apache2website/meta/main.yml"		: conatins the dependencies to run before the role is run.
* FILE "apache2website/tasks/main.yml"		: this is the entrypoint to the role execution.
* FILE "apache2website/templates/main.yml"	: contains dynamic configuration files which need to be injected on the fly.
* FILE "apache2website/vars/main.yml"		: contains the variables which can be changed as per the user needs or from onr env to another.
* FILE "basicPackages/tasks/main.yml"		: contains the dependency which will be run before apache2website role due to reference in "meta/main.yml" file.

# Install Ansible
sudo apt install python-minimal python-pip -y 	# dependency for ansible
pip install ansible==2.9.0.0 					# Installing ansible itself using pip

# Run the playbook
```
ansible-playbook -i hostsFileName playbookFileName.yml -vv
```
