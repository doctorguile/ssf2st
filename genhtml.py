import os
import sys
from subprocess import call

tmpfile = '/tmp/output.html'

walk_dir = '.'
if len(sys.argv) > 1:
    walk_dir = sys.argv[1]

for root, subdirs, files in os.walk(walk_dir):
    for filename in files:
        if filename != 'index.php':
            continue
        phpfile = os.path.join(root, filename)
        htmlfile = os.path.join(root, 'index.html')
        arg = ['wget',
        'http://localhost/ssf2st/%s' % (phpfile),
        '-O' , tmpfile]

        print arg
        call(arg)
        arg = ['/usr/local/bin/tidy', '-o', htmlfile, '-ashtml', '-indent',
         '--hide-comments', 'yes', tmpfile ]
        print arg
        call(arg)
