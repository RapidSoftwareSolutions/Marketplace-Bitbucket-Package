[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Bitbucket/functions?utm_source=RapidAPIGitHub_BitbucketFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Bitbucket Package
Code against the Bitbucket API to automate simple tasks, embed Bitbucket data into your own site, build mobile or desktop apps
* Domain: [Bitbucket](http://https://www.bitbucket.com/)
* Credentials: apiKey, apiSecret

## How to get credentials: 
0. Browse to [Bitbucket](http://https://www.bitbucket.com/)
1. Browse to [Settings](https://bitbucket.org/account)
2. Create new oAuth consumer to get your apiKey and apiSecret



## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```

  ## Webhook credentials
 Please use SDK to test this feature.
 
 0. Go to [RapidAPI](http://rapidapi.com)
 1. Log in or create an account
 2. Go to [My apps](https://dashboard.rapidapi.com/projects)
 3. Add new project with projectName to get your project Key
 
 | Field      | Type       | Description
 |------------|------------|----------
 | projectName     | credentials| Your RapidAPI project name
 | projectKey | credentials     | Your RapidAPI project key
 

## Bitbucket.getAccessToken
Get oAuth 2 access token

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| apiSecret| credentials| Your API secret
| code     | String     | Code provided by user

## Bitbucket.listHookEvents
Returns the webhook resource or subject types on which webhooks can be registered.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token

## Bitbucket.listHookEventsByType
Returns a paginated list of all valid webhook events for the specified entity.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| eventType  | String| Type of event

## Bitbucket.listRepositories
Returns a paginated list of all public repositories.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| after      | String| Show repositories starting from

## Bitbucket.listRepositoriesByUsername
Returns a paginated list of all repositories owned by the specified account or UUID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| role       | Select| Filters the result based on the authenticated user's role on each repository.
| after      | String| Show repositories starting from

## Bitbucket.getSingleRepository
Returns the object describing this repository.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.addRepository
Create new repository

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| Slug for new repository
| language   | String| Language for new repository
| scm        | Select| SCM for new repository
| hasWiki    | Select| Whether this repository has wiki
| isPrivate  | Select| Whether this repository is private
| description| String| Description for new repository
| hasIssues  | Select| Whether this repository has issues

## Bitbucket.updateRepository
Update existing repository

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| Slug for new repository
| language   | String| Language for new repository
| scm        | Select| SCM for new repository
| hasWiki    | Select| Whether this repository has wiki
| isPrivate  | Select| Whether this repository is private
| description| String| Description for new repository
| hasIssues  | Select| Whether this repository has issues

## Bitbucket.deleteRepository
Deletes existing repository

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.listBranchRestrictions
Returns a paginated list of all branch restrictions on the repository.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.addBranchRestrictions
Creates a new branch restriction rule for a repository.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| kind       | Select| kind describes what will be restricted. Allowed values are: push, force, delete, and restrict_merges.
| pattern    | String| Pattern for restriction
| value      | Number| Value with kind-specific semantics: "require_approvals_to_merge" uses it to require a minimum number of approvals on a PR; "require_passing_builds_to_merge" uses it to require a minimum number of passing builds.
| users      | List  | User objects
| groups     | List  | Group objects

## Bitbucket.getSingleBranchRestriction
Returns a specific branch restriction rule.

| Field             | Type  | Description
|-------------------|-------|----------
| accessToken       | String| oAuth 2 access token
| username          | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug          | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| brachRestrictionId| String| The restriction rule's id

## Bitbucket.updateBranchRestriction
Updates a specific branch restriction rule.

| Field             | Type  | Description
|-------------------|-------|----------
| accessToken       | String| oAuth 2 access token
| username          | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug          | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| brachRestrictionId| String| The restriction rule's id
| pattern           | String| Pattern for restriction
| value             | Number| Value with kind-specific semantics: "require_approvals_to_merge" uses it to require a minimum number of approvals on a PR; "require_passing_builds_to_merge" uses it to require a minimum number of passing builds.
| users             | List  | User objects
| groups            | List  | Group objects

## Bitbucket.deleteBranchRestriction
Deletes a specific branch restriction rule.

| Field             | Type  | Description
|-------------------|-------|----------
| accessToken       | String| oAuth 2 access token
| username          | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug          | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| brachRestrictionId| String| The restriction rule's id

## Bitbucket.approveCommit
Approve the specified commit as the authenticated user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| commitId   | String| The commit's SHA1.

## Bitbucket.unapproveCommit
Redact the authenticated user's approval of the specified commit.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| commitId   | String| The commit's SHA1.

## Bitbucket.listCommitStatuses
Returns all statuses (e.g. build results) for a specific commit.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| commitId   | String| The commit's SHA1.

## Bitbucket.addCommitBuild
Creates a new build status against the specified commit.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| commitId   | String| The commit's SHA1.
| url        | String| A URL linking back to the vendor or build system, for providing more information about whatever process produced this status.
| state      | Select| Provides some indication of the status of this commit
| key        | String| An identifier for the status that's unique to its type (current "build" is the only supported type) and the vendor, e.g. BB-DEPLOY
| name       | String| An identifier for the build itself, e.g. BB-DEPLOY-1
| description| String| A description of the build (e.g. "Unit tests in Bamboo")
| refname    | String| The name of the ref that pointed to this commit at the time the status object was created. Note that this the ref may since have moved off of the commit. 

## Bitbucket.getSingleCommitBuild
Returns the specified build status for a commit.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| commitId   | String| The commit's SHA1.
| buildId    | String| The build status' unique key

## Bitbucket.updateCommitBuild
Used to update the current status of a build status object on the specific commit.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| commitId   | String| The commit's SHA1.
| buildId    | String| The build status' unique key
| url        | String| A URL linking back to the vendor or build system, for providing more information about whatever process produced this status.
| state      | Select| Provides some indication of the status of this commit
| key        | String| An identifier for the status that's unique to its type (current "build" is the only supported type) and the vendor, e.g. BB-DEPLOY
| description| String| A description of the build (e.g. "Unit tests in Bamboo")
| refname    | String| The name of the ref that pointed to this commit at the time the status object was created. Note that this the ref may since have moved off of the commit. 

## Bitbucket.getSingleCommit
Returns the specified commit.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| commitId   | String| The commit's SHA1.

## Bitbucket.listCommitComments
Returns the commit's comments.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| commitId   | String| The commit's SHA1.

## Bitbucket.getSingleCommitComment
Returns the specified commit comment.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| commitId   | String| The commit's SHA1.
| commentId  | String| Id of the comment

## Bitbucket.listCommits
Returns the specified commit comment.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| branch     | String| Name of the branch
| exclude    | List  | Returns all commits in the repo that are not on these branches
| include    | List  | Returns all commits in the repo that are on these branches

## Bitbucket.listComponents
Returns the components that have been defined in the issue tracker.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.getSingleComponent
Returns the specified issue tracker component object.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| componentId| String| The component's id

## Bitbucket.listDefaultReviewers
Returns the repository's default reviewers.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.getSingleDefaultReviewer
Returns the repository's default reviewers.

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| oAuth 2 access token
| username    | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug    | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| reviewerName| String| Specified reviewer.

## Bitbucket.addDefaultReviewer
Adds the repository's default reviewers.

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| oAuth 2 access token
| username    | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug    | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| reviewerName| String| Specified reviewer.

## Bitbucket.deleteDefaultReviewer
Deletes the repository's default reviewers.

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| oAuth 2 access token
| username    | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug    | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| reviewerName| String| Specified reviewer.

## Bitbucket.getSingleDiff
Produces a raw, git-style diff for either a single commit (diffed against its first parent), or a revspec of 2 commits (e.g. 3a8b42..9ff173 where the first commit represents the source and the second commit the destination).

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| diffId     | String| ID of the diff
| context    | Number| Generate diffs with lines of context instead of the usual three
| path       | String| Limit the diff to a single file

## Bitbucket.listDownloads
Returns a list of download links associated with the repository.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.addDownload
Upload new download artifacts.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| file       | File  | File to upload

## Bitbucket.getSingleDownload
Return a redirect to the contents of a download artifact.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| filename   | String| File to get

## Bitbucket.deleteDownload
Deletes the specified download artifact from the repository.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| filename   | String| File to delete

## Bitbucket.listForks
Returns a paginated list of all the forks of the specified repository.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.listWebhooks
Returns a paginated list of webhooks installed on this repository.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.addWebhook
Creates a new webhook on the specified repository. You can use our service as url: 
```
https://webhooks.rapidapi.com/api/message/Bitbucket/webhookEvent/{projectName}/{projectKey} * see credentials description above
```

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| events     | List  | The events this webhook is subscribed to.
| url        | String| The URL events get delivered to.
| active     | Select| Whether the wehbook is enabled.
| description| String| A user-defined description of the webhook.

## Bitbucket.getSingleWebhook
Returns the webhook with the specified id installed on the specified repository.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| webhookId  | String| Id of the webhook

## Bitbucket.updateWebhook
Updates the specified webhook subscription. You can use our service as url: 
```
https://webhooks.rapidapi.com/api/message/Bitbucket/webhookEvent/{projectName}/{projectKey} * see credentials description above
```

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| webhookId  | String| Id of the webhook
| events     | List  | The events this webhook is subscribed to.
| url        | String| The URL events get delivered to.
| active     | Select| The URL events get delivered to.
| description| String| A user-defined description of the webhook.

## Bitbucket.deleteWebhook
Deletes the webhook with the specified id installed on the specified repository.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| webhookId  | String| Id of the webhook

## Bitbucket.listIssues
Returns the issues in the issue tracker.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.addIssues
Creates a new issue.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| title      | String| Title of the issue
| priority   | Select| Priority of the issue
| kind       | Select| Kind of the issue
| content    | String| Raw content
| markup     | Select| Content markup
| html       | String| html content
| assignee   | String| Issue assignee username
| state      | Select| Issue state

## Bitbucket.getSingleIssue
Returns the specified issue.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| issueId    | String| Id of the issue

## Bitbucket.deleteSingleIssue
Deletes the specified issue.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| issueId    | String| Id of the issue

## Bitbucket.listIssueAttachements
Returns the specified issue.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| issueId    | String| Id of the issue

## Bitbucket.addIssueAttachement
Returns the specified issue.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| issueId    | String| Id of the issue
| file       | String| Attachement file

## Bitbucket.getIssueSingleAttachement
Returns the specified issue attachment.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| issueId    | String| Id of the issue
| attachement| String| Attachement path

## Bitbucket.deleteIssueAttachement
Deletes the specified issue attachment.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| issueId    | String| Id of the issue
| attachement| String| Attachement path

## Bitbucket.listIssueComments
Returns the specified issue comments.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| issueId    | String| Id of the issue

## Bitbucket.getIssueSingleComment
Returns the specified issue comment.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| issueId    | String| Id of the issue
| commentId  | String| Id of the comment

## Bitbucket.checkIssueVote
Check whether the authenticated user has voted for this issue.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| issueId    | String| Id of the issue

## Bitbucket.addIssueVote
Vote for this issue.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| issueId    | String| Id of the issue

## Bitbucket.deleteIssueVote
Retract your vote.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| issueId    | String| Id of the issue

## Bitbucket.checkIssueWatching
Indicated whether or not the authenticated user is watching this issue.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| issueId    | String| Id of the issue

## Bitbucket.watchIssue
Start watching this issue.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| issueId    | String| Id of the issue

## Bitbucket.unwatchIssue
Stop watching this issue.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| issueId    | String| Id of the issue

## Bitbucket.listMilestones
Returns the milestones that have been defined in the issue tracker.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.getSingleMilestone
Returns the specified issue tracker milestone object.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| milestoneId| String| The milestone's id

## Bitbucket.getSinglePatch
Produces a raw patch for a single commit

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| commitId   | String| The commit id

## Bitbucket.getSinglePipeline
Retrieve a specified pipeline

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| pipelineId | String| The pipeline id

## Bitbucket.getPipelineSingleStep
Retrieve a given step of a pipeline.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| pipelineId | String| The pipeline id
| stepId     | String| The step id

## Bitbucket.getPipelineStepLog
Retrieve the log file for a given step of a pipeline.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| pipelineId | String| The pipeline id
| stepId     | String| The step id

## Bitbucket.stopPipeline
Signal the stop of a pipeline and all of its steps that not have completed yet.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| pipelineId | String| The pipeline id

## Bitbucket.listPipelineConfig
Retrieve the repository pipelines configuration.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.updatePipelineConfig
Update the pipelines configuration for a repository.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| enabled    | Select| Whether Pipelines is enabled for the repository.

## Bitbucket.updateBuildNumber
Retrieve the repository pipelines configuration.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| buildNumber| String| Next build number

## Bitbucket.getPipelineSingleSchedule
Retrieve a schedule by its UUID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| scheduleId | String| The uuid of the schedule.

## Bitbucket.updatePipelineSchedule
Update a schedule.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| scheduleId | String| The uuid of the schedule.
| cronPattern| String| The cron expression that the schedule applies.
| enabled    | Select| Whether the schedule is enabled.

## Bitbucket.deletePipelineSChedule
Delete a schedule by its UUID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| scheduleId | String| The uuid of the schedule.

## Bitbucket.listPipelineScheduleExecutions
Retrieve the executions of a given schedule.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| scheduleId | String| The uuid of the schedule.

## Bitbucket.getRepositorySSHCredentials
Retrieve the repository SSH key pair excluding the SSH private key. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.updateRepositorySSHCredentials
Update or create the repository SSH key pair excluding the SSH private key. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| publicKey  | String| The SSH public key.
| privateKey | String| The SSH pricate key.

## Bitbucket.deleteRepositorySSHCredentials
Delete the repository SSH key pair

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.getRepositoryKnownHost
Retrieve a repository level known host.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| knownHostId| String| The UUID of the known host to retrieve.

## Bitbucket.updateRepositoryKnownHost
Update a repository level known host.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| knownHostId| String| The UUID of the known host to retrieve.
| hostname   | String| The hostname of the known host.

## Bitbucket.deleteRepositoryKnownHost
Delete a repository level known host.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| knownHostId| String| The UUID of the known host to retrieve.

## Bitbucket.getRepositoryVariable
Retrieve a repository level variable.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| variableId | String| The UUID of the variable to retrieve.

## Bitbucket.updateRepositoryVariable
Update a repository level variable.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| variableId | String| The UUID of the variable to retrieve.
| value      | String| The value of the variable.
| secured    | Select| If true, this variable will be treated as secured. The value will never be exposed in the logs or the REST API.
| key        | String| The unique name of the variable

## Bitbucket.deleteRepositoryVariable
Delete a repository level variable.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| variableId | String| The UUID of the variable to retrieve.

## Bitbucket.listPullrequests
Returns a paginated list of all pull requests on the specified repository. By default only open pull requests are returned. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| state      | Select| Only return pull requests that are in this state.
| page       | Number| Page to return

## Bitbucket.createPullrequest
Creates a new pull request.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| title      | String| Title of the pull request.
| source     | JSON  | Source object
| destination| JSON  | Destination object
| description| String| Decription of the pull request

## Bitbucket.listPullrequestsActivity
Returns a paginated list of the pull request's activity log.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| page       | Number| Page to return

## Bitbucket.getSinglePullrequest
Returns the specified pull request.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| oAuth 2 access token
| username     | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug     | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| pullrequestId| String| Id of the pull request

## Bitbucket.updatePullrequest
Mutates the specified pull request.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| oAuth 2 access token
| username     | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug     | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| pullrequestId| String| Id of the pull request
| title        | String| Title of the pull request.
| source       | JSON  | Source object
| destination  | JSON  | Destination object
| description  | String| Decription of the pull request

## Bitbucket.getPullrequestActivity
Returns a paginated list of the pull request's activity log.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| oAuth 2 access token
| username     | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug     | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| pullrequestId| String| Id of the pull request
| page         | Number| Page to return

## Bitbucket.approvePullrequest
Approve the specified pull request as the authenticated user.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| oAuth 2 access token
| username     | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug     | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| pullrequestId| String| Id of the pull request

## Bitbucket.unapprovePullrequest
Redact the authenticated user's approval of the specified pull request.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| oAuth 2 access token
| username     | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug     | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| pullrequestId| String| Id of the pull request

## Bitbucket.listPullrequestComments
Redact the authenticated user's approval of the specified pull request.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| oAuth 2 access token
| username     | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug     | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| pullrequestId| String| Id of the pull request
| page         | Number| Page to return

## Bitbucket.getPullrequestSingleComment
Returns a specific pull request comment.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| oAuth 2 access token
| username     | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug     | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| pullrequestId| String| Id of the pull request
| commentId    | String| Id of the comment

## Bitbucket.listPullrequestCommits
Returns a paginated list of the pull request's commits.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| oAuth 2 access token
| username     | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug     | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| pullrequestId| String| Id of the pull request
| page         | Number| Page to return

## Bitbucket.declinePullrequest
Declines the pull request.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| oAuth 2 access token
| username     | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug     | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| pullrequestId| String| Id of the pull request

## Bitbucket.getPullrequestDiff
Fetches pull request diff

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| oAuth 2 access token
| username     | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug     | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| pullrequestId| String| Id of the pull request

## Bitbucket.mergePullrequest
Merges the pull request.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| oAuth 2 access token
| username     | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug     | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| pullrequestId| String| Id of the pull request

## Bitbucket.listPullrequestPatches
List pull request patches

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| oAuth 2 access token
| username     | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug     | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| pullrequestId| String| Id of the pull request

## Bitbucket.listPullrequestStatuses
Returns all statuses (e.g. build results) for the given pull request.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| oAuth 2 access token
| username     | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug     | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| pullrequestId| String| Id of the pull request

## Bitbucket.listRefs
List repository refs

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.listBranches
List repository branches

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.getSingleBranch
Fetches signle repository branch

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| branchName | String| Name of the branch

## Bitbucket.listTags
List repository tags

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.addTag
Add repository tag

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| name       | String| Name of the tag
| target     | JSON  | JSON object with target of the tag

## Bitbucket.getSingleTag
Retrieves information about single tag

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| name       | String| Name of the tag

## Bitbucket.getSrc
This endpoint redirects the client to the directory listing of the root directory on the main branch.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| path       | String| Path to the directory or file , e.g node/path

## Bitbucket.uploadCommit
This endpoint redirects the client to the directory listing of the root directory on the main branch.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| file       | File  | File with commit

## Bitbucket.listVersions
Returns the versions that have been defined in the issue tracker.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.getSingleVersion
Returns the specified issue tracker version object.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.
| versionId  | String| Id of the version

## Bitbucket.listWatchers
Returns a paginated list of all the watchers on the specified repository.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| reposlug   | String| This can either be the repository slug or the UUID of the repository, surrounded by curly-braces, for example: {repository UUID}.

## Bitbucket.listSnippets
Returns all snippets. Like pull requests, repositories and teams, the full set of snippets is defined by what the current user has access to.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| role       | Select| Role of the current user

## Bitbucket.listTeams
Returns all the teams that the authenticated user is associated with.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| This can either be the username or the UUID of the user, surrounded by curly-braces, for example: {user UUID}.
| role       | Select| Role of the current user

## Bitbucket.getSingleProject
Retrieves single project

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| owner      | String| The team which owns the project. This can either be the username of the team or the UUID of the team (surrounded by curly-braces ({})).
| projectKey | String| The project in question. This can either be the actual key assigned to the project or the UUID (surrounded by curly-braces ({})).

## Bitbucket.updateProject
Retrieves single project

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| owner      | String| The team which owns the project. This can either be the username of the team or the UUID of the team (surrounded by curly-braces ({})).
| projectKey | String| The project in question. This can either be the actual key assigned to the project or the UUID (surrounded by curly-braces ({})).
| name       | String| Name of the project
| key        | String| Key of the project
| description| String| Description of the project
| isPrivate  | Select| Whether this project is private

## Bitbucket.deleteProject
Deletes single project

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| owner      | String| The team which owns the project. This can either be the username of the team or the UUID of the team (surrounded by curly-braces ({})).
| projectKey | String| The project in question. This can either be the actual key assigned to the project or the UUID (surrounded by curly-braces ({})).

## Bitbucket.getTeamInfo
Gets the public information associated with a team.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| owner      | String| The team name

## Bitbucket.getTeamFollowers
Returns the list of accounts that are following this team.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| owner      | String| The team name

## Bitbucket.getTeamFollowing
Returns the list of accounts this team is following.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| owner      | String| The team name

## Bitbucket.listTeamWebhooks
Returns a paginated list of webhooks installed on this team.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| owner      | String| The team name

## Bitbucket.addTeamWebhook
Install webhook on this team. You can use our service as url: 
```
https://webhooks.rapidapi.com/api/message/Bitbucket/webhookEvent/{projectName}/{projectKey} * see credentials description above
```

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| owner      | String| The team name
| events     | List  | The events this webhook is subscribed to.
| url        | String| The URL events get delivered to.
| active     | Select| Whether the wehbook is enabled.
| description| String| A user-defined description of the webhook.

## Bitbucket.getTeamSingleWebhook
Returns the webhook with the specified id installed on the given team account.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| owner      | String| The team name
| webhookId  | String| ID of the webhook

## Bitbucket.updateTeamWebhook
Updates the webhook with the specified id installed on the given team account. You can use our service as url: 
```
https://webhooks.rapidapi.com/api/message/Bitbucket/webhookEvent/{projectName}/{projectKey} * see credentials description above
```

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| owner      | String| The team name
| webhookId  | String| ID of the webhook
| events     | List  | The events this webhook is subscribed to.
| url        | String| The URL events get delivered to.
| active     | Select| Whether the wehbook is enabled.
| description| String| A user-defined description of the webhook.

## Bitbucket.deleteTeamWebhook
Deletes the specified webhook subscription from the given team account.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| owner      | String| The team name
| webhookId  | String| ID of the webhook

## Bitbucket.listTeamMembers
All members of a team.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| owner      | String| The team name

## Bitbucket.getTeamSingleVariable
Retrieve a team level variable.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| owner      | String| The team name
| variableId | String| The UUID of the variable to retrieve.

## Bitbucket.updateTeamVariable
Update a team level variable.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| owner      | String| The team name
| variableId | String| The UUID of the variable to update.
| value      | String| The value of the variable.
| secured    | Select| If true, this variable will be treated as secured. The value will never be exposed in the logs or the REST API.
| key        | String| The unique name of the variable

## Bitbucket.deleteTeamVariable
Delete a team level variable.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| owner      | String| The team name
| variableId | String| The UUID of the variable to delete.

## Bitbucket.listTeamRepositories
All repositories owned by a user/team. This includes private repositories, but filtered down to the ones that the calling user has access to.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| owner      | String| The team name

## Bitbucket.getCurrentUserInfo
Returns the currently logged in user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token

## Bitbucket.listCurrentUserEmails
Returns all the authenticated user's email addresses. Both confirmed and unconfirmed.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token

## Bitbucket.getCurrentUserSingleEmail
Returns details about a specific one of the authenticated user's email addresses.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| email      | String| The user email

## Bitbucket.getUserInfo
Gets the public information associated with a user account.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| Username of the user to retrieve

## Bitbucket.getUserFollowers
Returns the list of accounts that are following this user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| Username of the user to retrieve

## Bitbucket.getUserFollowing
Returns the list of accounts this user is following.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| Username of the user to retrieve

## Bitbucket.listUserWebhooks
Returns a paginated list of webhooks installed on this user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| Username of the user to retrieve

## Bitbucket.addUserWebhook
Install webhook on this user. You can use our service as url: 
```
https://webhooks.rapidapi.com/api/message/Bitbucket/webhookEvent/{projectName}/{projectKey} * see credentials description above
```

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| The username
| events     | List  | The events this webhook is subscribed to.
| url        | String| The URL events get delivered to.
| active     | Select| Whether the wehbook is enabled.
| description| String| A user-defined description of the webhook.

## Bitbucket.getUserSingleWebhook
Returns the webhook with the specified id installed on the given user account.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| The username
| webhookId  | String| ID of the webhook

## Bitbucket.updateUserWebhook
Updates the webhook with the specified id installed on the given user account. You can use our service as url: 
```
https://webhooks.rapidapi.com/api/message/Bitbucket/webhookEvent/{projectName}/{projectKey} * see credentials description above
```

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| The username
| webhookId  | String| ID of the webhook
| events     | List  | The events this webhook is subscribed to.
| url        | String| The URL events get delivered to.
| active     | Select| Whether the wehbook is enabled.
| description| String| A user-defined description of the webhook.

## Bitbucket.deleteUserWebhook
Deletes the webhook with the specified id installed on the given user account.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| The username
| webhookId  | String| ID of the webhook

## Bitbucket.getUserSingleVariable
Retrieve a user level variable.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| The username
| variableId | String| The UUID of the variable to retrieve.

## Bitbucket.updateUserVariable
Update a user level variable.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| The username
| variableId | String| The UUID of the variable to update.
| value      | String| The value of the variable.
| secured    | Select| If true, this variable will be treated as secured. The value will never be exposed in the logs or the REST API.
| key        | String| The unique name of the variable

## Bitbucket.deleteUserVariable
Deletes a user level variable.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| The username
| variableId | String| The UUID of the variable to retrieve.

## Bitbucket.listUserRepositories
All repositories owned by a user. This includes private repositories, but filtered down to the ones that the calling user has access to.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| oAuth 2 access token
| username   | String| The username

