/**
* @api {get} /user 1.Get Users
* @apiName getUsers
* @apiGroup Admin
* @apiVersion 0.1.0
*
* @apiParam  {Number} offset  Page number.
* @apiParam  {Number} limit  Number of results per page.
* @apiParam  {Number} userType  User type.
*
* @apiSuccess  {String} userName  User Name.
* @apiSuccess  {String} employeeName  Employee name.
* @apiSuccess  {String} userRole  User role.
* @apiSuccess  {String} status  User status
*
*
* @apiSuccessExample Success-Response:
*     HTTP/1.1 200 OK
*
*		{
*		    "data":[
*			{
*			    "userName":"hameesh",
*			    "userRole":"ESS",
*			    "status":"Enabled",
*			    "employeeName":"Hameesh Von Johnson"
*			},
*			{
*			    "userName":"nina123",
*			    "userRole":"ESS",
*			    "status":"Enabled",
*			    "employeeName":"Nina Jane Lewis"
*			},
*			{
*			    "userName":"shawn",
*			    "userRole":"ESS",
*			    "status":"Enabled",
*			    "employeeName":"Shawn haffman"
*			}
*		    ],
*		    "rels":[
*
*		    ]
*		}
*
* @apiError No-Records Found.
*
* @apiErrorExample Error-Response:
*     HTTP/1.1 404 Record Not Found
*     {
*       "error": ["No Users Found"]
*     }
*
*/
