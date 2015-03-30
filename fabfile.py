"""
Fabric commands to deploy theme

tries to bring in host commands from fabhosts.py which looks like:
from fabric.api import env

def prod():
	env.user = 'awesome_user'
	env.hosts = [
		'awesome-host-1.com',
		'awesome-host-2.com',
	]
"""

from fabric.api import cd, env, put, prompt, local, sudo, prefix
from fabric.contrib.files import exists
from fabric.contrib.console import confirm

try:
	from fabhosts import dev
except ImportError:
	pass

local_app_dir = '.'

def deploy():
	"""
	Commit and push new files to wp-content/themes
	"""