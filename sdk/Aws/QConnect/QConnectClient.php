<?php
namespace Aws\QConnect;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Q Connect** service.
 * @method \Aws\Result activateMessageTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise activateMessageTemplateAsync(array $args = [])
 * @method \Aws\Result createAIAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAIAgentAsync(array $args = [])
 * @method \Aws\Result createAIAgentVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAIAgentVersionAsync(array $args = [])
 * @method \Aws\Result createAIPrompt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAIPromptAsync(array $args = [])
 * @method \Aws\Result createAIPromptVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAIPromptVersionAsync(array $args = [])
 * @method \Aws\Result createAssistant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssistantAsync(array $args = [])
 * @method \Aws\Result createAssistantAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssistantAssociationAsync(array $args = [])
 * @method \Aws\Result createContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContentAsync(array $args = [])
 * @method \Aws\Result createContentAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContentAssociationAsync(array $args = [])
 * @method \Aws\Result createKnowledgeBase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKnowledgeBaseAsync(array $args = [])
 * @method \Aws\Result createMessageTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMessageTemplateAsync(array $args = [])
 * @method \Aws\Result createMessageTemplateAttachment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMessageTemplateAttachmentAsync(array $args = [])
 * @method \Aws\Result createMessageTemplateVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMessageTemplateVersionAsync(array $args = [])
 * @method \Aws\Result createQuickResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createQuickResponseAsync(array $args = [])
 * @method \Aws\Result createSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSessionAsync(array $args = [])
 * @method \Aws\Result deactivateMessageTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deactivateMessageTemplateAsync(array $args = [])
 * @method \Aws\Result deleteAIAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAIAgentAsync(array $args = [])
 * @method \Aws\Result deleteAIAgentVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAIAgentVersionAsync(array $args = [])
 * @method \Aws\Result deleteAIPrompt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAIPromptAsync(array $args = [])
 * @method \Aws\Result deleteAIPromptVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAIPromptVersionAsync(array $args = [])
 * @method \Aws\Result deleteAssistant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssistantAsync(array $args = [])
 * @method \Aws\Result deleteAssistantAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssistantAssociationAsync(array $args = [])
 * @method \Aws\Result deleteContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContentAsync(array $args = [])
 * @method \Aws\Result deleteContentAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContentAssociationAsync(array $args = [])
 * @method \Aws\Result deleteImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImportJobAsync(array $args = [])
 * @method \Aws\Result deleteKnowledgeBase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKnowledgeBaseAsync(array $args = [])
 * @method \Aws\Result deleteMessageTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMessageTemplateAsync(array $args = [])
 * @method \Aws\Result deleteMessageTemplateAttachment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMessageTemplateAttachmentAsync(array $args = [])
 * @method \Aws\Result deleteQuickResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteQuickResponseAsync(array $args = [])
 * @method \Aws\Result getAIAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAIAgentAsync(array $args = [])
 * @method \Aws\Result getAIPrompt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAIPromptAsync(array $args = [])
 * @method \Aws\Result getAssistant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssistantAsync(array $args = [])
 * @method \Aws\Result getAssistantAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssistantAssociationAsync(array $args = [])
 * @method \Aws\Result getContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContentAsync(array $args = [])
 * @method \Aws\Result getContentAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContentAssociationAsync(array $args = [])
 * @method \Aws\Result getContentSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContentSummaryAsync(array $args = [])
 * @method \Aws\Result getImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImportJobAsync(array $args = [])
 * @method \Aws\Result getKnowledgeBase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKnowledgeBaseAsync(array $args = [])
 * @method \Aws\Result getMessageTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMessageTemplateAsync(array $args = [])
 * @method \Aws\Result getQuickResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQuickResponseAsync(array $args = [])
 * @method \Aws\Result getRecommendations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecommendationsAsync(array $args = [])
 * @method \Aws\Result getSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSessionAsync(array $args = [])
 * @method \Aws\Result listAIAgentVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAIAgentVersionsAsync(array $args = [])
 * @method \Aws\Result listAIAgents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAIAgentsAsync(array $args = [])
 * @method \Aws\Result listAIPromptVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAIPromptVersionsAsync(array $args = [])
 * @method \Aws\Result listAIPrompts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAIPromptsAsync(array $args = [])
 * @method \Aws\Result listAssistantAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssistantAssociationsAsync(array $args = [])
 * @method \Aws\Result listAssistants(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssistantsAsync(array $args = [])
 * @method \Aws\Result listContentAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listContentAssociationsAsync(array $args = [])
 * @method \Aws\Result listContents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listContentsAsync(array $args = [])
 * @method \Aws\Result listImportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImportJobsAsync(array $args = [])
 * @method \Aws\Result listKnowledgeBases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKnowledgeBasesAsync(array $args = [])
 * @method \Aws\Result listMessageTemplateVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMessageTemplateVersionsAsync(array $args = [])
 * @method \Aws\Result listMessageTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMessageTemplatesAsync(array $args = [])
 * @method \Aws\Result listQuickResponses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listQuickResponsesAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result notifyRecommendationsReceived(array $args = [])
 * @method \GuzzleHttp\Promise\Promise notifyRecommendationsReceivedAsync(array $args = [])
 * @method \Aws\Result putFeedback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putFeedbackAsync(array $args = [])
 * @method \Aws\Result queryAssistant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAssistantAsync(array $args = [])
 * @method \Aws\Result removeAssistantAIAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeAssistantAIAgentAsync(array $args = [])
 * @method \Aws\Result removeKnowledgeBaseTemplateUri(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeKnowledgeBaseTemplateUriAsync(array $args = [])
 * @method \Aws\Result renderMessageTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise renderMessageTemplateAsync(array $args = [])
 * @method \Aws\Result searchContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchContentAsync(array $args = [])
 * @method \Aws\Result searchMessageTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchMessageTemplatesAsync(array $args = [])
 * @method \Aws\Result searchQuickResponses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchQuickResponsesAsync(array $args = [])
 * @method \Aws\Result searchSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchSessionsAsync(array $args = [])
 * @method \Aws\Result startContentUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startContentUploadAsync(array $args = [])
 * @method \Aws\Result startImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startImportJobAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAIAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAIAgentAsync(array $args = [])
 * @method \Aws\Result updateAIPrompt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAIPromptAsync(array $args = [])
 * @method \Aws\Result updateAssistantAIAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssistantAIAgentAsync(array $args = [])
 * @method \Aws\Result updateContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateContentAsync(array $args = [])
 * @method \Aws\Result updateKnowledgeBaseTemplateUri(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateKnowledgeBaseTemplateUriAsync(array $args = [])
 * @method \Aws\Result updateMessageTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMessageTemplateAsync(array $args = [])
 * @method \Aws\Result updateMessageTemplateMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMessageTemplateMetadataAsync(array $args = [])
 * @method \Aws\Result updateQuickResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateQuickResponseAsync(array $args = [])
 * @method \Aws\Result updateSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSessionAsync(array $args = [])
 * @method \Aws\Result updateSessionData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSessionDataAsync(array $args = [])
 */
class QConnectClient extends AwsClient {}
