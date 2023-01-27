<?php declare(strict_types=1);
/**
 * This file is automatic generated by build_docs.php file
 * and is used only for autocomplete in multiple IDE
 * don't modify manually.
 */

namespace danog\MadelineProto\Namespace;

interface Channels
{
    /**
     * Mark [channel/supergroup](https://core.telegram.org/api/channel) history as read.
     *
     * @param array $channel [Channel/supergroup](https://core.telegram.org/api/channel) @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param int $max_id ID of message up to which messages should be marked as read
     *
     *
     * @return array
     */
    public function readHistory(array $channel, int $max_id);

    /**
     * Delete messages in a [channel/supergroup](https://core.telegram.org/api/channel).
     *
     * @param array $channel [Channel/supergroup](https://core.telegram.org/api/channel) @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $id IDs of messages to delete @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function deleteMessages(array $channel, array $id);

    /**
     * Reports some messages from a user in a supergroup as spam; requires administrator rights in the supergroup.
     *
     * @param array $channel Supergroup @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $participant Participant whose messages should be reported @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $id IDs of spam messages @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function reportSpam(array $channel, array $participant, array $id);

    /**
     * Get the participants of a [supergroup/channel](https://core.telegram.org/api/channel).
     *
     * @param array $channel Channel @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $filter Which participant types to fetch @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param int $offset [Offset](https://core.telegram.org/api/offsets)
     * @param int $limit [Limit](https://core.telegram.org/api/offsets)
     * @param array $hash  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function getParticipants(array $channel, array $filter, int $offset, int $limit, array $hash = []);

    /**
     * Get info about a [channel/supergroup](https://core.telegram.org/api/channel) participant.
     *
     * @param array $channel Channel/supergroup @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $participant Participant to get info about @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function getParticipant(array $channel, array $participant);

    /**
     * Create a [supergroup/channel](https://core.telegram.org/api/channel).
     *
     * @param string $title Channel title
     * @param string $about Channel description
     * @param array $broadcast Whether to create a [channel](https://core.telegram.org/api/channel) @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $megagroup Whether to create a [supergroup](https://core.telegram.org/api/channel) @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $for_import Whether the supergroup is being created to import messages from a foreign chat service using [messages.initHistoryImport](https://docs.madelineproto.xyz/API_docs/methods/messages.initHistoryImport.html) @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $geo_point Geogroup location @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param string $address Geogroup address
     *
     *
     * @return array
     */
    public function createChannel(string $title, string $about, array $broadcast = [], array $megagroup = [], array $for_import = [], array $geo_point = [], string $address = '', int $ttl_period = 0);

    /**
     * Modify the admin rights of a user in a [supergroup/channel](https://core.telegram.org/api/channel).
     *
     * @param array $channel The [supergroup/channel](https://core.telegram.org/api/channel). @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $user_id The ID of the user whose admin rights should be modified @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $admin_rights The admin rights @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param string $rank Indicates the role (rank) of the admin in the group: just an arbitrary string
     *
     *
     * @return array
     */
    public function editAdmin(array $channel, array $user_id, array $admin_rights, string $rank);

    /**
     * Edit the name of a [channel/supergroup](https://core.telegram.org/api/channel).
     *
     * @param array $channel Channel/supergroup @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param string $title New name
     *
     *
     * @return array
     */
    public function editTitle(array $channel, string $title);

    /**
     * Change the photo of a [channel/supergroup](https://core.telegram.org/api/channel).
     *
     * @param array $channel Channel/supergroup whose photo should be edited @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $photo New photo @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function editPhoto(array $channel, array $photo);

    /**
     * Check if a username is free and can be assigned to a channel/supergroup.
     *
     * @param array $channel The [channel/supergroup](https://core.telegram.org/api/channel) that will assigned the specified username @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param string $username The username to check
     *
     *
     * @return array
     */
    public function checkUsername(array $channel, string $username);

    /**
     * Change the username of a supergroup/channel.
     *
     * @param array $channel Channel @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param string $username New username
     *
     *
     * @return array
     */
    public function updateUsername(array $channel, string $username);

    /**
     * Join a channel/supergroup.
     *
     * @param array $channel Channel/supergroup to join @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function joinChannel(array $channel);

    /**
     * Leave a [channel/supergroup](https://core.telegram.org/api/channel).
     *
     * @param array $channel [Channel/supergroup](https://core.telegram.org/api/channel) to leave @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function leaveChannel(array $channel);

    /**
     * Invite users to a channel/supergroup.
     *
     * @param array $channel Channel/supergroup @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $users Users to invite @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function inviteToChannel(array $channel, array $users);

    /**
     * Delete a [channel/supergroup](https://core.telegram.org/api/channel).
     *
     * @param array $channel [Channel/supergroup](https://core.telegram.org/api/channel) to delete @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function deleteChannel(array $channel);

    /**
     * Get link and embed info of a message in a [channel/supergroup](https://core.telegram.org/api/channel).
     *
     * @param array $channel Channel @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param int $id Message ID
     * @param array $grouped Whether to include other grouped media (for albums) @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $thread Whether to also include a thread ID, if available, inside of the link @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function exportMessageLink(array $channel, int $id, array $grouped = [], array $thread = []);

    /**
     * Enable/disable message signatures in channels.
     *
     * @param array $channel Channel @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param bool $enabled Value
     *
     *
     * @return array
     */
    public function toggleSignatures(array $channel, bool $enabled);

    /**
     * Get [channels/supergroups/geogroups](https://core.telegram.org/api/channel) we're admin in. Usually called when the user exceeds the [limit](https://docs.madelineproto.xyz/API_docs/constructors/config.html) for owned public [channels/supergroups/geogroups](https://core.telegram.org/api/channel), and the user is given the choice to remove one of his channels/supergroups/geogroups.
     *
     * @param array $by_location Get geogroups @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $check_limit If set and the user has reached the limit of owned public [channels/supergroups/geogroups](https://core.telegram.org/api/channel), instead of returning the channel list one of the specified [errors](#possible-errors) will be returned.<br>Useful to check if a new public channel can indeed be created, even before asking the user to enter a channel username to use in [channels.checkUsername](https://docs.madelineproto.xyz/API_docs/methods/channels.checkUsername.html)/[channels.updateUsername](https://docs.madelineproto.xyz/API_docs/methods/channels.updateUsername.html). @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function getAdminedPublicChannels(array $by_location = [], array $check_limit = []);

    /**
     * Ban/unban/kick a user in a [supergroup/channel](https://core.telegram.org/api/channel).
     *
     * @param array $channel The [supergroup/channel](https://core.telegram.org/api/channel). @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $participant Participant to ban @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $banned_rights The banned rights @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function editBanned(array $channel, array $participant, array $banned_rights);

    /**
     * Get the admin log of a [channel/supergroup](https://core.telegram.org/api/channel).
     *
     * @param array $channel Channel @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param string $q Search query, can be empty
     * @param int $max_id Maximum ID of message to return (see [pagination](https://core.telegram.org/api/offsets))
     * @param int $min_id Minimum ID of message to return (see [pagination](https://core.telegram.org/api/offsets))
     * @param int $limit Maximum number of results to return, [see pagination](https://core.telegram.org/api/offsets)
     * @param array $events_filter Event filter @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $admins Only show events from these admins @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function getAdminLog(array $channel, string $q, int $max_id, int $min_id, int $limit, array $events_filter = [], array $admins = []);

    /**
     * Associate a stickerset to the supergroup.
     *
     * @param array $channel Supergroup @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $stickerset The stickerset to associate @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function setStickers(array $channel, array $stickerset);

    /**
     * Mark [channel/supergroup](https://core.telegram.org/api/channel) message contents as read.
     *
     * @param array $channel [Channel/supergroup](https://core.telegram.org/api/channel) @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $id IDs of messages whose contents should be marked as read @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function readMessageContents(array $channel, array $id);

    /**
     * Delete the history of a [supergroup](https://core.telegram.org/api/channel).
     *
     * @param array $channel [Supergroup](https://core.telegram.org/api/channel) whose history must be deleted @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param int $max_id ID of message **up to which** the history must be deleted
     * @param array $for_everyone Whether the history should be deleted for everyone @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function deleteHistory(array $channel, int $max_id, array $for_everyone = []);

    /**
     * Hide/unhide message history for new channel/supergroup users.
     *
     * @param array $channel Channel/supergroup @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param bool $enabled Hide/unhide
     *
     *
     * @return array
     */
    public function togglePreHistoryHidden(array $channel, bool $enabled);

    /**
     * Get a list of [channels/supergroups](https://core.telegram.org/api/channel) we left.
     *
     * @param int $offset Offset for [pagination](https://core.telegram.org/api/offsets)
     *
     *
     * @return array
     */
    public function getLeftChannels(int $offset);

    /**
     * Get all groups that can be used as [discussion groups](https://core.telegram.org/api/discussion).
     *
     * Returned [basic group chats](https://core.telegram.org/api/channel#basic-groups) must be first upgraded to [supergroups](https://core.telegram.org/api/channel#supergroups) before they can be set as a discussion group.
     * To set a returned supergroup as a discussion group, access to its old messages must be enabled using [channels.togglePreHistoryHidden](https://docs.madelineproto.xyz/API_docs/methods/channels.togglePreHistoryHidden.html), first.
     *
     * @return array
     */
    public function getGroupsForDiscussion();

    /**
     * Associate a group to a channel as [discussion group](https://core.telegram.org/api/discussion) for that channel.
     *
     * @param array $broadcast Channel @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $group [Discussion group](https://core.telegram.org/api/discussion) to associate to the channel @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function setDiscussionGroup(array $broadcast, array $group);

    /**
     * Transfer channel ownership.
     *
     * @param array $channel Channel @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $user_id New channel owner @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $password [2FA password](https://core.telegram.org/api/srp) of account @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function editCreator(array $channel, array $user_id, array $password);

    /**
     * Edit location of geogroup.
     *
     * @param array $channel [Geogroup](https://core.telegram.org/api/channel) @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $geo_point New geolocation @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param string $address Address string
     *
     *
     * @return array
     */
    public function editLocation(array $channel, array $geo_point, string $address);

    /**
     * Toggle supergroup slow mode: if enabled, users will only be able to send one message every `seconds` seconds.
     *
     * @param array $channel The [supergroup](https://core.telegram.org/api/channel) @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param int $seconds Users will only be able to send one message every `seconds` seconds, `0` to disable the limitation
     *
     *
     * @return array
     */
    public function toggleSlowMode(array $channel, int $seconds);

    /**
     * Get inactive channels and supergroups.
     *
     * @return array
     */
    public function getInactiveChannels();

    /**
     * Convert a [supergroup](https://core.telegram.org/api/channel) to a [gigagroup](https://core.telegram.org/api/channel), when requested by [channel suggestions](https://core.telegram.org/api/config#channel-suggestions).
     *
     * @param array $channel The [supergroup](https://core.telegram.org/api/channel) to convert @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function convertToGigagroup(array $channel);

    /**
     * Mark a specific sponsored message as read.
     *
     * @param array $channel Peer @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function viewSponsoredMessage(array $channel);

    /**
     * Get a list of sponsored messages.
     *
     * @param array $channel Peer @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function getSponsoredMessages(array $channel);

    /**
     * Obtains a list of peers that can be used to send messages in a specific group.
     *
     * @param array $peer The group where we intend to send messages @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function getSendAs(array $peer);

    /**
     * Delete all messages sent by a specific participant of a given supergroup.
     *
     * @param array $channel Supergroup @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $participant The participant whose messages should be deleted @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function deleteParticipantHistory(array $channel, array $participant);

    /**
     * Set whether all users [should join a discussion group in order to comment on a post »](https://core.telegram.org/api/discussion#requiring-users-to-join-the-group).
     *
     * @param array $channel Discussion group @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param bool $enabled Toggle
     *
     *
     * @return array
     */
    public function toggleJoinToSend(array $channel, bool $enabled);

    /**
     * Set whether all users should [request admin approval to join the group »](https://core.telegram.org/api/invites#join-requests).
     *
     * @param array $channel Group @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param bool $enabled Toggle
     *
     *
     * @return array
     */
    public function toggleJoinRequest(array $channel, bool $enabled);

    /**
     *
     *
     * @param array $channel  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $order  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function reorderUsernames(array $channel, array $order);

    /**
     *
     *
     * @param array $channel  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function toggleUsername(array $channel, string $username, bool $active);

    /**
     *
     *
     * @param array $channel  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function deactivateAllUsernames(array $channel);

    /**
     *
     *
     * @param array $channel  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function toggleForum(array $channel, bool $enabled);

    /**
     *
     *
     * @param array $channel  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $send_as  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function createForumTopic(array $channel, string $title, int $icon_color = 0, int $icon_emoji_id = 0, array $send_as = []);

    /**
     *
     *
     * @param array $channel  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function getForumTopics(array $channel, int $offset_date, int $offset_id, int $offset_topic, int $limit, string $q = '');

    /**
     *
     *
     * @param array $channel  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $topics  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function getForumTopicsByID(array $channel, array $topics);

    /**
     *
     *
     * @param array $channel  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function editForumTopic(array $channel, int $topic_id, string $title = '', int $icon_emoji_id = 0, bool $closed = false, bool $hidden = false);

    /**
     *
     *
     * @param array $channel  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function updatePinnedForumTopic(array $channel, int $topic_id, bool $pinned);

    /**
     *
     *
     * @param array $channel  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function deleteTopicHistory(array $channel, int $top_msg_id);

    /**
     *
     *
     * @param array $channel  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $order  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $force  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function reorderPinnedForumTopics(array $channel, array $order, array $force = []);

    /**
     *
     *
     * @param array $channel  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function toggleAntiSpam(array $channel, bool $enabled);

    /**
     *
     *
     * @param array $channel  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function reportAntiSpamFalsePositive(array $channel, int $msg_id);

    /**
     *
     *
     * @param array $channel  @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function toggleParticipantsHidden(array $channel, bool $enabled);
}