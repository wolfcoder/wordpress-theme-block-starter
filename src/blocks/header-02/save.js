import { RichText } from '@wordpress/block-editor';

export default function save({attributes}) {
    const { content } = attributes;

    return (
        <RichText.Content 
            tagName="h2"
            value={content}
        />
    )
}
