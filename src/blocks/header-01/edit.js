import { RichText} from '@wordpress/block-editor';


export default function edit({ attributes, setAttributes}) {
    const { content } = attributes;
    return (
        <RichText
            tagName="h1"
            placeholder={"Enter heading"}
            value={content}
            onChange={(newVal) => setAttributes({ content: newVal })}
        />
    )
}