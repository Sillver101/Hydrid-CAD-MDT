# Hydrid-CAD-MDT
Hydrid CAD/MDT is a Computer Aided Dispatch / Mobile Data Terminal for use in GTA V Role-playing Communities.

# Discord
https://discord.gg/NeRrWZC

# System Requirements
- Operating System
- Linux
- Windows
+ PHP Version
+ Minimum: 5.4.0
+ Recommended: 7.0 (Or Greater)
- Database
- MySQL

# Support
If you are in-need of support, have a question, need to report an issue, etc, You can join
our Discord: https://discord.gg/NeRrWZC and open a ticket.
*We will not provide support for modified files unless you have been given permission.*

# License
Hydrid is released under GNU Affero General Public License.
You can view the license terms and conditions at https://www.gnu.org/licenses/agpl-3.0.en.html
Additionally, You are not allowed to remove the "Powered By Hydrid" branding, or links to Hydrid,
or any credits. 

# Installation
- Download the latest version from GitHub.
- Upload the *hydrid.sql* file to your database. (We recommend using a seperate user besides Root for security reasons)
- Move the contents from the *Upload* folder, into your website directory.
- Navigate to **classes/connect.php**, and open it with a text-editor.
- Change the database information to yours.
- Go to **www.your-site.com/cad-directory/register.php**
- Create an account
- In your database under `users`, Find the newly created account and set the `usergroup` to **Management**
- Done! You now have full access over your CAD/MDT system.
